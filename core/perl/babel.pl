#!/usr/bin/perl

# QUEUE
# =====

my %option=();     # Command line options.
my @operations=(); # Operations given on command line.
my @args=();       # Arguments to the operations.
my $dictionary;    # Target dictionary for operations.
my $errors=0;      # Number of errors.

# FILES
# =====

# File storage variables.
%file=();     # @{$file{filename}{section}} list of english terms
%header=();   # @{$header{filename}{section}} header lines of the section as a list
%translate=();# $translate{filename}{english}{lang} translation of the term (including 'en')

# Additional storage that can be reconstructed from file storage.
%title=();    # $title{filename}{section} section titles
%section=();  # @{$section{filename}{english}} section numbers having a term

# COMMANDS
# ========

#
# execute() - Run all commands in queue.
#
sub execute
{
	my @a;
	
	for(my $i=0; $i<=$#operations; $i++)
	{
		$fn="command_".$operations[$i];
		push @a,$dictionary;
		push @a,split(/ /,$args[$i]);
		&$fn(@a);
		rebuild_additional($dictionary);
	}
}

#
# command_add(filename,code) - Add language templates.
#
sub command_add
{
	my $filename=shift;
	my $lang=shift;
	my $section="";

	for(keys %{$file{$filename}})
	{
		$section=$_;
		for(@{$file{$filename}{$section}})
		{
			$translate{$filename}{$_}{$lang}="" if($translate{$filename}{$_}{$lang} eq "");
		}
	}
}

#
# command_del(filename,code) - Delete language.
#
sub command_del
{
	my $filename=shift;
	my $lang=shift;
	my $section="";

	for(keys %{$file{$filename}})
	{
		$section=$_;
		for(@{$file{$filename}{$section}})
		{
			delete $translate{$filename}{$_}{$lang};
		}
	}
}

#
# command_lang(filename,code) - Delete all but one language.
#
sub command_lang
{
	my $filename=shift;
	my $lang=shift;
	my $section="";
	my $english="";

	for(keys %{$file{$filename}})
	{
		$section=$_;
		for(@{$file{$filename}{$section}})
		{
			$english=$_;
			for(keys %{$translate{$filename}{$english}})
			{
				delete $translate{$filename}{$english}{$_} if($_ ne $lang and $_ ne "en");
			}
		}
	}
}

#
# command_title(filename,title) - Delete all not having the title.
#
sub command_title
{
	my $filename=shift;
	my $title=shift;
	my $english;
	
	for(get_data($filename))
	{
		$english=@{$_}[0];
		if(not @{$_}[2]=~m/$title/)
		{
			del_entry($filename,$english,"en") ;
		}
	}
}

#
# command_titlenot(filename,title) - Delete all having the title.
#
sub command_titlenot
{
	my $filename=shift;
	my $title=shift;
	my $english;
	
	for(get_data($filename))
	{
		$english=@{$_}[0];
		if(@{$_}[2]=~m/$title/)
		{
			del_entry($filename,$english,"en") ;
		}
	}
}

#
# command_clean(filename) - Clear entries having no translations.
#
sub command_clean
{
	my $filename=shift;
	my $english="";
	my @terms;
	my $ok;
	
	@terms=terms($filename);
	for(@terms)
	{
		my $english=$_;
		$ok=0;
		for(keys %{$translate{$filename}{$english}})
		{
			$ok=1 if($_ ne "en" and not $translate{$filename}{$english}{$_} =~ m/^\s*$/);
		}
		del_entry($filename,$english,"en") if not $ok;
	}
}

#
# command_purify(filename) - Remove all entries having no reason to be translated.
#
sub command_purify
{
	my $filename=shift;
	my $english="";
	my @terms;

	@terms=terms($filename);
	for(@terms)
	{
		my $english=$_;
		if(invalid_entry($english))
		{
			del_entry($filename,$english,"en");
		}
	}
}

#
# command_append(filename,file) - Append new entries from the file.
#
sub command_append
{
	my $filename=shift;
	my $addfile=shift;
	my $english="";
	my $section="";
	my $lang="";

	load_file($addfile);

	for(keys %{$file{$addfile}})
	{
		$section=$_;
		for(@{$file{$addfile}{$section}})
		{
			$english=$_;
			if(not has_entry($filename,$english,"en"))
			{
				error("cannot find entry '$english' from the dictionary $filename.");
			}
				
			for(keys %{$translate{$addfile}{$english}})
			{
				$lang=$_;
				add_entry($filename,$title{$addfile}{$section},$english,$lang,$translate{$addfile}{$english}{$lang});
			}
		}
	}

	delete $file{$addfile};
	delete $header{$addfile};
	delete $translate{$addfile};
}

#
# command_reduce(filename,another) - Remove all entries found from another file.
#
sub command_reduce
{
	my $filename=shift;
	my $another=shift;
	my $english="";

	load_file($another);

	for(keys %{$file{$another}})
	{
		$section=$_;
		for(@{$file{$another}{$section}})
		{
			del_entry($filename,$_,"en");
		}
	}

	delete $file{$another};
	delete $header{$another};
	delete $translate{$another};
}

#
# command_split(filename) - Split entries at "/" or ", ".
#
sub command_split
{
	my $filename=shift;
	
	for(get_data($filename))
	{
		do_split($filename,@{$_}[1],@{$_}[0],@{$_}[2],"\/");
	}
	for(get_data($filename))
	{
		do_split($filename,@{$_}[1],@{$_}[0],@{$_}[2],", ");
	}

}

sub do_split
{
	my $filename=shift;
	my $section=shift;
	my $english=shift;
	my $title=shift;
	my $pattern=shift;
	my $term1;
	
	if($english=~m/(.+?)$pattern(.+)/)
	{
		del_entry($filename,$english,"en");
		
		while($english=~m/(.+?)$pattern(.+)/)
		{
			$term1=$1;
			$english=$2;
			
			add_entry($filename,$title,$term1,"en",$term1);
		}
			
		add_entry($filename,$title,$english,"en",$english);
	}
}

#
# command_unify(filename) - Remove duplicate entries.
#
sub command_unify
{
	my $filename=shift;
	my $english;
	my $section;
	my %count=();
	
	for(get_data($filename))
	{
		$english=@{$_}[0];
		$section=@{$_}[1];
		$count{$english}++;
		if($count{$english} > 1)
		{
			del_one_entry($filename,$english,$section);
		}
	}
}

#
# command_numbers(filename)
#
sub command_numbers
{
	my $filename=shift;
	my $english;
	my $newenglish;
	my $section;
	my $str;
	my $tit;
	
	for(get_data($filename))
	{
		$str="d";
		$english=@{$_}[0];
		$section=@{$_}[1];
		$newenglish=$english;
		while($newenglish=~s/-?[0-9]+/%$str/)
		{
			$str++;
		}
		if($newenglish ne $english)
		{
			$tit=$title{$filename}{$section};
			del_entry($filename,$english,"en");
			add_entry($filename,$tit,$newenglish,"en",$newenglish);
		}
	}
}

#
# command_readxml(filename,xml file)
#
sub command_readxml
{
	my $filename=shift;
	my $xmlfile=shift;
	my $originalfile=$xmlfile;
	my $language;
	my %text;
	
	if($originalfile =~ s/\/([a-z][a-z])(\/[a-zA-Z_]+\.xml)$/\/$2/)
	{
		$language=$1;
		if(-e $originalfile)
		{
			open(F,$originalfile) or die "$0: cannot open $xmlfile";
			while(<F>)
			{
				if(m/<card name="([^\"]+)".+text="([^\"]+)"/)
				{
					$text{$1}=$2;

					add_entry($filename,"Card: $1",$1,"en",$1);
					add_entry($filename,"Card: $1",$2,"en",$2);
				}
			}
			close(F);
		}
	}
	else
	{
		$language="en";
	}
	
	open(F,$xmlfile) or die "$0: cannot open $xmlfile";
	while(<F>)
	{
		if(m/<card name="([^\"]+)".+text="([^\"]+)"/)
		{
			add_entry($filename,"Card: $1",$1,$language,"");
			if($language eq "en")
			{
				add_entry($filename,"Card: $1",$2,$language,$2);
			}
			else
			{
				error("no english version for '$1'") if(not has_entry($filename,$1,"en"));
				add_entry($filename,"Card: $1",$text{$1},$language,$2);
			}
		}
	}
	close(F);
}

#
# TOOLS
# =====

#
# error(message) - handle errors
#
sub error
{
	my $msg=shift;
	$errors++;
	print STDERR "ERROR $errors: $msg\n";

}

#
# invalid_entry(english) - return true if entry does not need translation
#
sub invalid_entry
{
	my $english=shift;

	$english=~s/\{[A-Za-z0-9]\}//g;
	$english=~s/[^A-Za-z]//g;

	return ($english eq "");
}

#
# sections(filename) - return the largest section number
#
sub sections
{
	my $filename=shift;
	my $ret=0;

	for(keys %{$file{$filename}})
	{
		$ret=$_ if($_ > $ret);
	}

	return $ret;
}

#
# section_of(filename,title) - Return the section number having a title, or 0
# if not exist.
#
sub section_of
{
	my $filename=shift;
	my $tit=shift;
	
	for(keys %{$title{$filename}})
	{
		return $_ if($tit eq $title{$filename}{$_});
	}

	return 0;
}

#
# terms(filename) - return all terms defined in english
#
sub terms
{
	my $filename=shift;
	my @ret;

	for(keys %{$file{$filename}})
	{
		push @ret,@{$file{$filename}{$_}};
	}
	
	return @ret;
}

#
# get_data(filename) - Get contents of the file as list of triplets (english
# term,section,section title).
#
sub get_data
{
	my $filename=shift;
	my $section="";
	my $english="";
	my @ret;
	my $i=0;
	
	for(sort keys %{$file{$filename}})
	{
		$section=$_;
		for(@{$file{$filename}{$section}})
		{
			$english=$_;
			@{$ret[$i++]}=($english,$section,$title{$filename}{$section});
		}
	}

	return @ret;
}

#
# has_entry(filename,english,lang) - return 1 if translation exists
#
sub has_entry
{
	my $filename=shift;
	my $english=shift;
	my $lang=shift;

	return 1 if($translate{$filename}{$english}{$lang} ne "");
	return 0;
}

#
# position(filename,section,english) - Return order number of the term inside
# section or 0 if does not exist. (Note: add -1 to get correct index).
#
sub position
{
	my $filename=shift;
	my $section=shift;
	my $english=shift;
	my $i=0;
	
	for(@{$file{$filename}{$section}})
	{
		$i++;
		return $i if($english eq $_);
	}

	return 0;
}

#
# translations(filename,english) - return list of translation languages (excluding
# english)
#
sub translations
{
	my $filename=shift;
	my $english=shift;

	return grep(!/^en$/,keys(%{$translate{$filename}{$english}}));
}

#
# del_one_entry(filename,english,section) - Delete an file entry (not translations).
#
sub del_one_entry
{
	my $filename=shift;
	my $english=shift;
	my $sect=shift;

	my $max=scalar(@{$file{$filename}{$sect}});
	for(my $i=0; $i<$max; $i++)
	{
		if($file{$filename}{$sect}[$i] eq $english)
		{
			splice @{$file{$filename}{$sect}},$i,1;
			$i--;
		}
	}
	if(scalar(@{$file{$filename}{$sect}})==0)
	{
		delete $file{$filename}{$sect};
		delete $header{$filename}{$sect};
	}
}

#
# del_entry(filename,english,lang) - Delete an translation entry. If language="en", delete
# all translations too. Remove also the whole section if the entry was the
# last one. If the entry exists in more than one section, delete them all.
#
sub del_entry
{
	my $filename=shift;
	my $english=shift;
	my $lang=shift;
	my $sect;
	my @sections=@{$section{$filename}{$english}};

	delete $translate{$filename}{$english}{$lang};
	if($lang eq "en")
	{
		for(@sections)
		{
			$sect=$_;
			delete $translate{$filename}{$english};
			my $max=scalar(@{$file{$filename}{$sect}});
			for(my $i=0; $i<$max; $i++)
			{
				if($file{$filename}{$sect}[$i] eq $english)
				{
					splice @{$file{$filename}{$sect}},$i,1;
					$i--;
				}
			}
			if(scalar(@{$file{$filename}{$sect}})==0)
			{
				delete $file{$filename}{$sect};
				delete $header{$filename}{$sect};
			}
		}
	}
}

#
# add_entry(filename,title,english term,lang,translation) - Insert a translation.
#
sub add_entry
{
	my $filename=shift;
	my $tit=shift;
	my $english=shift;
	my $lang=shift;
	my $translation=shift;
	my $sect;

	$sect=section_of($filename,$tit);
	if($sect==0)
	{
		$sect=sections($filename)+1;
		push @{$header{$filename}{$sect}},"";
		push @{$header{$filename}{$sect}}," $tit";
		push @{$header{$filename}{$sect}},"";
		$title{$filename}{$sect}=$tit;
	}

	if(position($filename,$sect,$english)==0)
	{
		push @{$file{$filename}{$sect}},$english;
	}
	
	if(not $option{"ignore"} and $translate{$filename}{$english}{$lang} ne "" and $translate{$filename}{$english}{$lang} ne $translation)
	{
		my $msg="";
		rebuild_additional($filename);
		for(@{$section{$filename}{$english}})
		{
			$msg.=" [$title{$filename}{$_}]";
		}
		error(uc($lang)."-translation '$translation' of '$english' conflicting in $filename (sections$msg)");
	}

	$translate{$filename}{$english}{$lang}=$translation;
}

#
# FILE HANDLING
# =============

#
# load_files() - load all dictionary files in queue
#
sub load_files
{
	load_file($dictionary);
}

#
# rebuild_additional(filename) - rebuild additional data for file
#
sub rebuild_additional
{
	my $filename=shift;
	my $sect;
	my $english;
	my $comment;
	
	$title{$filename}=();
	$section{$filename}=();

	# Scan headers.
	for(keys %{$header{$filename}})
	{
		$sect=$_;
		for(@{$header{$filename}{$sect}})
		{
			$comment=$_;
			$comment=~s/^\s+//;
			$comment=~s/\s+$//;
			$title{$filename}{$sect}.=$comment;
		}
	}

	# Scan terms.
	for(keys %{$file{$filename}})
	{
		$sect=$_;
		for(@{$file{$filename}{$sect}})
		{
			$english=$_;
			push @{$section{$filename}{$english}},$sect;
		}
	}
}

#
# load_file(filename) - read file and fill structures for it
#
sub load_file
{
	my $filename=shift;
	my $section=0;
	my $last="";
	my $lang="";
	my $english="";
	my $term="";

	open(F,$filename) or die "$0: cannot open $filename";

	while(<F>)
	{
 		chomp;

 		next if(m/^\s*$/);
		
 		if(m/^\#(.*)/)
 		{
			next if(m/^\#=========================/);
			my $comment=$1;
 			$section++ if(not $last=~m/^\#/);
 			push @{$header{$filename}{$section}},$comment;
 		}
 		elsif(m/^([a-z][a-z]):\s*(.+?)\s*$/)
 		{
			$lang=$1;
			$term=$2;
			
			if($lang eq "en")
			{
				$english=$2;
				$english=~s/^\s+//;
				$english=~s/\s+$//;
				push @{$file{$filename}{$section}},$english;
			}

			$translate{$filename}{$english}{$lang}=$term;
		}
 		$last=$_;
	}
	close(F);

	rebuild_additional($filename);
}

#
# save_files() - save all dictionary files in queue
#
sub save_files
{
	save_file($dictionary);
}

#
# construct_file(filename) - reconstruct a file and return list of lines
#
sub construct_file
{
	my $filename=shift;
	my $section;
	my $english;
	my $lang;
	my @ret;
	
	for(sort {$title{$filename}{$a} cmp $title{$filename}{$b}} keys %{$header{$filename}})
	{
		$section=$_;
		for(@{$header{$filename}{$section}})
		{
			push @ret,"#$_";
		}
		push @ret,"";
		for(@{$file{$filename}{$section}})
		{
			$english=$_;
			push @ret,"en: $english";
			for(sort keys %{$translate{$filename}{$english}})
			{
				push @ret,"$_: $translate{$filename}{$english}{$_}" if $_ ne "en";
			}
			push @ret,"";
		}
	}

	return @ret;
}

#
# save_file(filename) - write file (or print if --test)
#
sub save_file
{
	my $filename=shift;
	my @file=construct_file($filename);

	return if($option{"noout"});
	
	if($option{"out"})
	{
		open(F,">>$option{out}");
		for(@file)
		{
			print F "$_\n";
		}
		close(F);
	}
	elsif($option{"write"})
	{
		open(F,">$filename");
		for(@file)
		{
			print F "$_\n";
		}
		close(F);
	}
	else
	{
		print "#=========================[ $filename ]=========================\n";
		for(@file)
		{
			print "$_\n";
		}
	}
}

# MAIN
# ====

if($#ARGV < 0)
{
	print "usage: $0 [options] <operation1> [<operation2>...] <dictionary1> [<dictionary2>...]\n";
	print "  options:    --write             write dictionaries back instead of printing\n";
	print "              --noout             disable file writing and printing\n";
	print "              --ignore            ignore mismatching translations\n";
	print "              --force             write files even if errors\n";
	print "              --out <file>        write results to the <file>\n";
	print "  operations: --add <language>    add empty templates for <language>\n";
	print "              --del <language>    remove all entries of <language>\n";
	print "              --lang <language>   remove all but english entries and entries in specified <language>\n";
	print "              --title <title>     remove all entries except those under section containing <title>\n";
	print "              --titlenot <title>  remove all entries under section containing <title>\n";
	print "              --clean             remove all entries having no translations\n";
	print "              --purify            remove all absurd entries\n";
	print "              --append <file>     add all entries found from the <file>, that does not already exist\n";
	print "              --split             split dictionary entries where possible\n";
	print "              --unify             remove all duplicate entries\n";
	print "              --reduce <file>     remove all entries already found from <file>\n";
	print "              --numbers           collect all numbers and replace with %d, %e, ..., %r\n";
	print "              --readxml <file>    collect card names and texts and add to the dictionary\n";
	exit;
}


for($i=0; $i<=$#ARGV; $i++)
{
	if($ARGV[$i] =~ m/^--(write|noout|ignore|force)/)
	{
		$option{$1}=1;
	}
	elsif($ARGV[$i] =~ m/^--(out)$/)
	{
		$i++;
		$option{$1}=$ARGV[$i];
		unlink($ARGV[$i]) if $ARGV[$i-1] eq "--out";
	}
	elsif($ARGV[$i] =~ m/^--(clean|purify|split|unify|numbers)$/)
	{
		push @operations,$1;
		push @args,"";
	}
	elsif($ARGV[$i] =~ m/^--(add|del|lang|title|titlenot|append|reduce|readxml)$/)
	{
		push @operations,$1;
		$i++;
		push @args,$ARGV[$i];
	}
	elsif($ARGV[$i] =~ m/$^nothing_here_yet/)
	{
		push @operations,$1;
		$i++;
		push @args,$ARGV[$i]." ".$ARGV[$i+1];
		$i++;
	}
	elsif(-f $ARGV[$i])
	{
		die "$0: only one filename supported yet" if $dictionary ne "";
		$dictionary=$ARGV[$i];
	}
	else
	{
		die "$0: invalid argument $ARGV[$i]";
	}
}

load_files();
execute();
if($errors and !$option{"force"})
{
	print STDERR "Refusing to write $dictionary due to errors. Use --force to override.\n";
	exit(1);
}
else
{
	save_files();
	exit(0);
}

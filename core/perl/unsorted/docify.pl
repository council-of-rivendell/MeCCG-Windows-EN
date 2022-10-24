#!/usr/bin/perl

# Titles for each file.
$filetitle{"parser.h"}="Core functions (C++)";
$filetitle{"parser_lib.cpp"}="Core functions (C++)";
$filetitle{"parser_libcards.cpp"}="Game data library (C++)";
$filetitle{"parser_libnet.cpp"}="Net library (C++)";
$filetitle{"server.cpp"}="General server functions (C++)";
$filetitle{"interpreter.cpp"}="GUI library (C++)";
$filetitle{"common.include"}="Common client and server functions";
$filetitle{"client.functions"}="General client functions";
$filetitle{"factory-server.functions"}="General factory server functions";
$filetitle{"meta-server.functions"}="General meta server functions";
$filetitle{"server.functions"}="General game server functions";
$filetitle{".include"}="specific client functions";
$filetitle{"-factory-server.include"}="specific factory server functions";
$filetitle{"-meta-server.include"}="specific meta server functions";
$filetitle{"-server.include"}="specific game server functions";
$filetitle{"-common.include"}="specific common client and server functions";

#
# xmlquote(text) - replace special characters by &entity;
#
sub xmlquote
{
	my $txt=shift;
	$txt=~s/&/&et;/g;
	$txt=~s/</&lt;/g;
	$txt=~s/>/&gt;/g;

	return $txt;
}

#
# latex2xml(text) - Convert the given LaTeX expression to the DocBook XML format.
#
sub latex2xml($)
{
	my $txt=shift;

	$txt=~s/</&lt;/g;
	$txt=~s/([A-Za-z])_([A-Za-z0-9])/$1<sub>$2<\/sub>/g;
	$txt=~s/([A-Za-z])_{(.+?)}/$1<sub>$2<\/sub>/g;
	$txt=~s/\\_/_/g;
	$txt=~s/\\l?dots/.../g;
	$txt=~s/\\le/<=/g;
	$txt=~s/\\ge/=>/g;
	$txt=~s/--/-/g;
	$txt=~s/\\([#_%{}])/$1/g;
	$txt=~s/{\\tt Parser::LangErr}/<tt>Parser::LangErr<\/tt>/g;
	$txt=~s/{\\tt (.+?)}/<tt>$1<\/tt>/g;
	$txt=~s/([^\$]*)\$(.+?)\$/$1<em>$2<\/em>/g;
	$txt=~s/<em>(.*?)<em>(.*?)<\/em>(.*?)<\/em>/<em>$1$2$3<\/em>/g;
	$txt=~s/<em>(.*?)<em>(.*?)<\/em>(.*?)<\/em>/<em>$1$2$3<\/em>/g;
	$txt=~s/<em>(.*?)<em>(.*?)<\/em>(.*?)<\/em>/<em>$1$2$3<\/em>/g;
	$txt=~s/<em>(.*?)<em>(.*?)<\/em>(.*?)<\/em>/<em>$1$2$3<\/em>/g;
				
	return $txt;
}

#
# function2xml(fn,args,doc) - Return function documentation in XML.
#
sub function2xml
{
	my $fn=shift;
	my $args=shift;
	my $doc=shift;
	my @args=split(/,/,$args);
	my $ret="";

	die "$0: function $fn does not have documentation" if($doc eq "");
		
    $ret.="<a name=\"$fn:$sourcefile\">\n";
    $ret.="<p class=func>\n";
    $ret.="  <b class=functitle>def $fn";
    if($args eq "")
    {
		$ret.="()";
	}
    else
    {
		my $first=1;
		$ret.="(";
		foreach $f (@args)
		{
			if($first)
			{
				$first=0;
			}
			else
			{
				$ret.=", ";
			}
			
			if($f eq "...")
			{
				$ret.="...";
			}
			else
			{
				$ret.="<em>".latex2xml($f)."</em>";
			}
		}
		$ret.=")";
	}
    $ret.="</b><br>\n";
	$ret.="<em>Category: $filetitle{$sourcefile}</em><br>\n";
	$ret.="<em>File: $sourcefile</em><br>\n";
    $ret.="  ".latex2xml($doc)."\n";
    $ret.="</p>\n";

	return $ret;
}

#
# docify_function(text) - Append documentation of the function to $docs.
#
sub docify_function
{
	my $str=shift;

	die "$0: not a function documentation: $str" if not $str =~ m/^([a-zA-Z_.0-9]+)\((.*?)\) - (.+)/;

	my $fn=$1;
	my $args=$2;
	my $txt=$3;
	$txt=~s/\s+$//;
	
	die "$0: $sourcefile: last . is missig from docs for function $fn ($txt)" if not $txt =~ m/\.$/;

	my $fnkey="$fn:$sourcefile";
	
    #$src{$fnkey}=$sourcefile;
    #$title{$fnkey}=$sourcetitle;
    push @{$fncbytitle{$sourcetitle}},$fnkey;
    $docs{$fnkey}=function2xml($fn,$args,$txt);
}

#
# docify_command(mode,cmd,args,synopsis,users,help) - Append documentation of command to $docs.
#
sub docify_command
{
	my $mode=shift;
	my $cmd=shift;
	my $args=shift;
	my @args=split(/,/,$args);
	my $synopsis=shift;
	my $users=shift;
	my $help=shift;
	my $ret="";

	$ret.="<p class=func>\n";
	$ret.="  <b class=functitle>$cmd";
	foreach $f (@args)
	{
		$ret.=" <em>$f</em>";
	}
	$ret.="</b><br>\n";
	$ret.="  <em>Mode: ".ucfirst($mode)." mode</em><br>\n";
	if($users ne "NULL")
	{
		$ret.="  <em>Restrictions: ";
		$users=~s/[()"]//g;
        $users=~s/(.*),/$1 and /;
        $users=~s/ and $//;
        $users=~s/,/, /g;
		$ret.=$users;
		$ret.=" only";
        $ret.="</em><br>\n";
	}
	$help=xmlquote($help);
	$help=~s/{yellow}(.+?){white}/<em>$1<\/em>/g;
	$help=~s/{green}//g;
	$help=~s/{yellow}//g;
	$help=~s/{white}//g;
	$help=~s/{orange}//g;
	$help=~s/\\n/<br>&nbsp;&nbsp;/g;
	$ret.=$help."\n";
	$ret.="</p>\n";

	$docs{$cmd}=$ret;
}

#
# docify_file(filename) - Search the source file for functions and strip documentation from the
# comment lines of the source. Collect documenation to the global
# $docs{function name}.
#
sub docify_file
{
	my $filein=shift;
	my $str="";
	
	open(F,$filein) or die "$0: cannot open file '$filein'";
	
	while(<F>)
	{
		chop;
		if(m/^\s*(template\s+<class\s+([^>]+)>)?\s+Data\s+Parser<[^>]+>::(\w+)\(const\s+Data&\s+\w+\)$/)
		{
			die "$0: function $3 does not have documentation" if($str eq "");
			docify_function($str) if(!$skip_functions);
			$str="";
			next;
		}
		if(m/^\s*Data\s+(\w+)\(const\s+Data&\s+\w+\)$/)
		{
			die "$0: function $1 does not have documentation" if($str eq "");
			docify_function($str) if(!$skip_functions);
			$str="";
			next;
		}
		if(m/^\s*Data\s+Table::(\w+)\(const\s+Data&\s+\w+\)$/)
		{
			die "$0: function $1 does not have documentation" if($str eq "");
			docify_function($str) if(!$skip_functions);
			$str="";
			next;
		}
		if(m/^\s*Data\s+Server::(\w+)\(const\s+Data&\s+\w+\)$/)
		{
			die "$0: function $1 does not have documentation" if($str eq "");
			docify_function($str) if(!$skip_functions);
			$str="";
			next;
		}
		if(m/^\s*HELP{"(.+?)"}{"(.+?)"}=\("(.*?)","(.*?)",(.*?),$/)
	    {
			my $mode=$1;
			my $cmd=$2;
			my $args=$3;
			my $synopsis=$4;
			my $users=$5;
			my $help;
			
			$help=<F>;
			chop $help;
			$help=~s/"\);$//;
			$help=~s/^"//;
			
			docify_command($mode,"/".$cmd,$args,$synopsis,$users,$help) if(!$skip_commands);
			next;
		}
		if(m/^\s*def\s+(.+)/)
		{
			my $fn=$1;
			$str=~s/^\s+//;
			die "$0: $sourcefile: documentation does not match for function '$fn': '$str'" if(not $str=~m/^$fn/);
			docify_function($str) if(!$skip_functions);
			$str="";
			next;
		}
		
		if(m/^\s*(\/\/\/|#)\s*(.+)/)
		{
		    my $add=$2;
			$str.=" " if($str ne "");
			$str.=$add;
		}
		else
		{
			$str="" if not m/^\s*#\s*$/;
		}
	}
	close(F);
}

#
# print_table(columns, list) - Output list in HTML table.
#
sub print_table
{
	my $columns=shift;
	my $rows=int($#_ / $columns)+1;
	
	print "<table class=toc width=\"95%\">\n";
	for(my $i=0; $i < $rows; $i++)
	{
		print " <tr class=toc>\n";
		for(my $j=0; $j<$columns; $j++)
		{
			print "  <td class=toc width=\"".int(100/$columns)."%\">";
			print $_[$i+$j*$rows] ne "" ? $_[$i+$j*$rows] : "&nbsp;";
			print "</td>\n";
		}
		print " </tr>\n";
	}
	print "</table>\n";
}


#
# main
#
if($#ARGV < 0)
{
	print "usage: $0 [--reference] [--index] [--skip-commands] <files>...\n";
	exit;
}

while($ARGV[0] =~ m/^--/)
{
	if($ARGV[0] eq "--reference")
	{
		$reference=1;
	}
	elsif($ARGV[0] eq "--index")
	{
		$index=1;
	}
	elsif($ARGV[0] eq "--skip-commands")
	{
		$skip_commands=1;
	}
	elsif($ARGV[0] eq "--skip-functions")
	{
		$skip_functions=1;
	}
	else
	{
		die "$0: invalid option $ARGV[0]";
	}

	shift @ARGV;
}

for(@ARGV)
{
	$sourcefile="$_";
	$sourcefile=~s/^(..\/)?(scripts\/)?//;
	if($filetitle{$sourcefile} eq "")
	{
		my $s=$sourcefile;
		$s=~s/^([A-Za-z]+)//;
		$filetitle{$sourcefile}="$1 ".$filetitle{$s} if($filetitle{$s} ne "");
	}
	
	die "$0: file $sourcefile has no title" if($filetitle{$sourcefile} eq "");
	$sourcetitle=$filetitle{$sourcefile};
	docify_file($_);
}

if($reference)
{
	print "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
  <head>
    <title>Gccg-script Function Reference</title>
    <link href=\"../default.css\" rel=\"stylesheet\" type=\"text/css\">
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
  </head>
  <body>

  <h1>Gccg-script Function Reference</h1>
";

	print "\n<h2>List of All Functions</h2>\n\n";
	$count=0;
	for(sort {uc($a) cmp uc($b)} keys %docs)
	{
		if($letter ne uc(substr($_,0,1)))
		{
			$letter=uc(substr($_,0,1));
			push @toc,"<b>- $letter -</b>";
		}
		my $fn=$_;
		$fn=~s/^(.*):.*/$1/;
		push @toc,"<a href=\"#$_\"><b>$fn</b></a><br>\n";
		$count++;
	}
	push @toc,"($count functions)";
	print_table(3,@toc);
	print "</p>\n";

	for(sort keys %fncbytitle)
	{
		my $title=$_;

		print "<h2>$title</h2>\n";

		for(sort {uc($a) cmp uc($b)} @{$fncbytitle{$title}})
		{
			print $docs{$_}."\n";
		}
	}
	

	print "  </body>
</html>
";
}
elsif($index)
{
	for(sort keys %fncbytitle)
	{
		my $title=$_;

		print "<h4><?h3(\"$title\")?></h4>\n";

		@toc=();
		for(sort {uc($a) cmp uc($b)} @{$fncbytitle{$title}})
		{
			my $fn=$_;
			$fn=~s/^(.*):.*/$1/;
			push @toc,"<a href=\"ref_functions.php#$_\"><b>$fn</b></a><br>\n";
		}
		print_table(3,@toc);
	}
}
else
{
	print $docs{$_}."\n" for(sort {uc($a) cmp uc($b)} keys %docs);
}

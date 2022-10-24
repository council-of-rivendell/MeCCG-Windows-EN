#
# Globals.
# =======

use Cwd 'abs_path';

# Print files, sets and cards when read.
my $debug_gccg=0;

#
# clear_data() - Clear all global structures.
#
sub clear_data
{
	$game_name="Unknown"; # Name of the game.
	$game_dir="Unknown"; # Directory of the game.
	$next_card=-1; # Next card number to load - 1.
	%card_name=(); # Card names indexed by card numbers.
	%card_number=(); # List of card numbers indexed by card names.
	%fuzzy_card_number=(); # List of card numbers indexed by card names with accents dropped.
	%attribute=(); # Hash of card attributes indexed by card number and attribute name.
	%graphics=(); # Hash of graphics indexed by card number.
	%game_option=(); # Game options loaded from game.xml.
	%set_name=(); # Set names indexed by set abbreviations.
	%first_card=(); # Number of the first card in the set.
	%last_card=(); # Number of the last card in the set.
	%dir=(); # Graphics dir indexed by set abbrev.
	#%game_dat=(); # The games.dat information.
}

#
# XML-data loader
# ===============

#
# root_path() - Return the root of core files.
#
sub root_path
{
    my $path = abs_path(".");
    return $path if -f $path."/games.dat";

    $path = abs_path("..");
    return $path if -f $path."/games.dat";

    $path = abs_path("../core");
    return $path if -f $path."/games.dat";

    $path = abs_path("../../core");
    return $path if -f $path."/games.dat";

    die "Cannot find root path for '$game_name'.";
}

#
# root_path() - Return the root of additional repository files.
#
sub repo_path
{
    my $path = abs_path("../".lc($game_dir));
    return $path if -d $path."/graphics/$game_dir";

    my $path = abs_path("../../".lc($game_dir));
    return $path if -d $path."/graphics/$game_dir";
}

#
# xml_path([<file>]) - Return the location of xml file.
#
sub xml_path
{
    my $file=shift;

    return $path=root_path()."/xml" if $file eq "";

    $path=repo_path()."/xml/";
    return $path if -f "$path/$game_dir/$file";

    $path=root_path()."/xml/";
    return $path if -f "$path/$game_dir/$file";

    die "Cannot find XML path for $file";
}

#
# load_cardset(game, file) - Load card data from the file.
#
sub load_cardset
{
	my $game=shift;
	my $file=shift;
	my $name;
	my $setabbrev;

	$file=~s|perl/|| if ! -f $file;
	$file=~s|\.\./|| if ! -f $file;

	open(CARDFILE,$file) or die "cannot open card XML $file";
	print "\nFILE $file\n" if $debug_gccg;
	while(<CARDFILE>)
	{
		chomp;

		if(m/<ccg-setinfo name=\"(.+?)\" dir=\"(.+?)\" abbrev=\"(.+?)\"/)
		{
		        print "SET $1\n" if $debug_gccg;
			$set_name{$3}=$1;
			$dir{$3}=$2;
			$setabbrev=$3;
			$first_card{$setabbrev}=$next_card+1;
		}
		elsif(m/<card.*?name=\"(.*?)\".*?graphics=\"(.*?)\"/)
		{
			$next_card++;
			$name=$1;
			$graphics{$next_card}=$2;

			$name=~s/&amp;/&/g;
			$name=~s/&quot;/\"/g;

			print "  $next_card = $name\n" if $debug_gccg;
			$card_name{$next_card}=$name;
			$attribute{$next_card}{"set"}=$setabbrev;
			push @{$card_number{$name}},$next_card;

			$name=~tr/âêîôûáéíóúýäëïöüÿåÂÊÎÔÛÁÉÍÓÚÝÄËÏÖÜÅ/aeiouaeiouyaeiouyaAEIOUAEIOUYAEIOUA/;
			push @{$fuzzy_card_number{lc($name)}},$next_card;
		}
		elsif(m/<attr key=\"(.+?)\" value=\"(.+?)\"\/>/)
		{
			$attribute{$next_card}{$1}=$2;
		}
	}
	close(CARDFILE);
	$last_card{$setabbrev}=$next_card;
}

#
# load_game(game) - Load card data for the given game.
#
sub load_game
{
	my $game=shift;

	clear_data();
	$game_dir=$game;

	open(XML,xml_path()."/".lc($game).".xml") or die "cannot open game XML ".root_path()."/".lc($game).".xml";
	while(<XML>)
	{
		chomp;

		$game_name=$1 if m/<ccg name=\"(.+?)\"/;
		load_cardset($game,xml_path($1)."/$game/".$1) if m/<cardset source=\"(.+?.xml)\"\/>/;
		$game_option{$1}=$2 if m/<option name=\"(.*?)\" value=\"(.*?)\"\/>/;
		
	}
	close(XML);
}

#
# Card data queries
# =================

#
# cards_of_set(abbrev) - Return list of cards in the set.
#
sub cards_of_set
{
	my $set=shift;
	die "$0: cards_of_set: invalid set $set" if !is_set($set);
	return $first_card{$set}..$last_card{$set};
}

#
# set_of(card number) - Return set abbreviation if the card.
#
sub set_of
{
	my $num=shift;
	for(keys %first_card)
	{
		return $_ if($num >= $first_card{$_} && $num <= $last_card{$_});
	}
}

#
# is_card(name) - Return 1 if 'name' is a card name.
#
sub is_card
{
	my $card=shift;
	return number($card) >= 0;
}

#
# is_set(name) - Return 1 if 'name' is an existing set name.
#
sub is_set
{
	my $name=shift;
	return (scalar grep {$_ eq $name} keys(%set_name)) > 0;
}

#
# name(card number) - Return the name of the card.
#
sub name
{
	my $num=shift;
	return $card_name{$num};
}

#
# canonical_name(card number) - Return the canonical name of the card.
#
sub canonical_name
{
	my $num=shift;
	my $name=name($num);

	if(scalar images($name) > 1)
	{
		$name.=" (".set_of($num).")";
	}
	
	if(scalar images($name) > 1)
	{
		if($game_option{"canonical key"} ne "")
		{
			if(attr($game_option{"canonical key"},$num) ne "")
			{
				$name.=" [".substr(attr($game_option{"canonical key"},$num),0,1)."]";
			}
		}
	}

	die "$0: canonical name unimplemented for $name" if(scalar images($name) > 1);
	
	return $name;
}

#
# select_by_attr(attr,value,card numbers) - Return list of cards having the given attribute.
#
sub select_by_attr
{
	my $key=shift;
	my $val=shift;
	my @ret;
	
	for(@_)
	{
		push @ret,$_ if(attr($key,$_) eq $val);
	}

	return @ret;
}

#
# select_by_canonical_key(value,list of card numbers)
#
sub select_by_canonical_key
{
	my $val=shift;
	my @ret;
	
	for(@_)
	{
		push @ret,$_ if(uc(substr(attr($game_option{"canonical key"},$_),0,1)) eq $val);
	}

	return @ret;
}

#
# images(card name) - Return list of card numbers having the name.
#
sub images
{
	my $name=shift;
	my @num=@{$card_number{$name}};

	@num=@{$fuzzy_card_number{lc($name)}} if(scalar @num < 1);

	if(scalar @num < 1)
	{
		if($game_option{"canonical key"} ne "" && $name=~s/ \[(.)\]$//)
		{
			@num=select_by_canonical_key($1,images($name));
		}
		
		if(scalar @num < 1 && $name=~s/ \((..)\)//)
		{
			@num=select_by_attr("set",$1,images($name));
		}
	}

	return @num;
}

#
# number(card name) - Return the number of the first card found or -1 if unknown.
#
sub number
{
	my $name=shift;
	my @num=images($name);

	return -1 if(scalar @num < 1);

	return $num[0];
}

#
# attr(attribute,card number) - Return attribute of the card.
#
sub attr
{
	my $a=shift;
	my $num=shift;

	return $attribute{$num}{$a};
}

#
# image(card number) - Return picture file name.
#
sub image
{
	my $num=shift;
	return $graphics{$num};
}

#
# sets() - Return list of set abbreviations.
#
sub sets
{
    return keys(%set_name);
}

#
# set_name(abbrev) - Return the name of the set.
#
sub set_name
{
    my $abbrev=shift;
    return $set_name{$abbrev};
}

#
# set_dir(abbrev) - Return the directory of the set.
#
sub set_dir
{
    my $abbrev=shift;
    return $dir{$abbrev};
}

#
# set_first(abbrev) - Return the first card number of the set.
#
sub set_first
{
    my $abbrev=shift;
    return $first_card{$abbrev};
}

#
# set_last(abbrev) - Return the last card number of the set.
#
sub set_last
{
    my $abbrev=shift;
    return $last_card{$abbrev};
}

#
# graphics_dir(abbrev) - Return the graphics directory for the set
#
sub graphics_dir
{
    my $abbrev=shift;

    $path=abs_path(root_path()."/../".lc($game_dir)."/graphics/$game_dir/".$dir{$abbrev});
    return $path if -d $path;

    $path=abs_path(root_path()."/graphics/$game_dir/".$dir{$abbrev});
    return $path if -d $path;

    die "cannot find graphcis for $abbrev";
}

#
# graphics_files(abbrev) - Return list of files in the graphics dir of the set
#
sub graphics_files
{
    my $abbrev=shift;

    my $path=graphics_dir($abbrev);
    my @files;

    opendir(my $dir,$path);
    while($f=readdir($dir)) {
	next if $f eq "." || $f eq "..";
	next if -d "$path/$f";

	push @files,$f;
    }
    closedir($dir);

    return @files;
}

#
# graphcis(cardnum) - Path to the graphcis of the card if found.
#
sub graphics
{
    my $num=shift;
    my $set=set_of($num);
    
    my $file="graphics/$game_dir/".set_dir($set)."/".$graphics{$num};
    $file="../".info_full2name($game_name)."/$file" if !-f $file;
    $file="" if !-f $file;

    return $file;
}

#
# card_size() - get the card size for the game
#
sub card_size
{
    my $game=shift;

    return info_get($game,"cards");
}

#
# Deck manipulation
# =================

#
# add_deck(count,part,card number) - Add a card to the deck if valid.
#
sub add_deck
{
	my $count=shift;
	my $part=shift;
	my $card=shift;

	die "$0: unknown card '$card'" if name($card) eq "";

	for(my $i=0; $i<$count; $i++)
	{
		push @{$deck{$part}},canonical_name($card);
	}
}

#
# write_deck(filename) - Export deck structure from %deck having name $deckname.
#
sub write_deck
{
	my $file=shift;
	my $part;
	my $card;
	my %done;
	
	open(F,">$file");
	print F "#\n";
	print F "# GCCG $game_name deck\n";
	print F "#\n";
	print F "#      $deckname\n";
	print F "#\n";
	for(sort keys(%deck))
	{
		$part=$_;
		%done=();
		print F "\n$part\n\n";
		foreach(@{$deck{$part}})
		{
			$card=$_;
			if(not $done{$card})
			{
				print F (scalar grep {$_ eq $card} @{$deck{$part}})," $card\n";
				$done{$card}=1;
			}
		}
	}
	print F "\n";
	close(F);
}

#
# read_deck(path) - Read a deck file from the path.
#
# This function returns mapping from deck parts to card numbers.
sub read_deck
{
	my $file=shift;
	my $line;

	open(F,$file) or die "cannot open '$file'";
	$line=<F>;
	$line=<F>;

	$line=~m/^\# GCCG v\S+? (.+) deck/;

	my $game=info_full2name($1);
	die "game '$1' not recognized" if !$game;

	my %info=read_games_dat();

	load_game($info{$game}{"realname"});

	my %deck;
	my $part="deck";
	my @im;

	while(<F>)
	{
	    s/\s+$//;
	    next if m/^\#/;
	    next if m/^$/;

	    if(m/^(\d+) (.+)/)
	    {
		@im=images($2);
		die "cannot found card images of '$2'" if(!@im);
		my $n=$1;
		for(my $i; $i<$n; $i++)
		{
		    push @{$deck{$part}},$im[0];
		}
	    }
	    else
	    {
		$part=lc($_);
	    }
	}

	return %deck;
}

#
# deck_converter(game) - Convert deck using external read_deck() function.
#
sub deck_converter
{
	my $game=shift;
	my $src;
	my $dst;

	if($#ARGV < 0 || $#ARGV > 1)
	{
		print "usage: $0 <original deck> [<gccg deck>]\n";
		exit;
	}

	init_card_map();
	
	$src=$ARGV[0];
	open(F,$src) or die "$0: cannot open deck file '$src'";
	close(F);

	if($#ARGV==0)
	{
		$dst="-";
	}
	else
	{
		$dst=$ARGV[1];
	}

	$deckname=$src;
	$deckname=~s/\.\w+$//;
	$deckname=~s/.*\/(.+)/$1/;

	load_game($game);
	
	read_deck($src);
	write_deck($dst);
}

#
# Game info
# =========

#
# read_games_dat() - read games.dat and return structure
#
sub read_games_dat
{
    my $path=root_path()."/games.dat";
    my %ret;
    my @games;

    return %games_dat if(%games_dat);

    open(DATA,"$path") or die "cannot open '$path'";
    while(<DATA>) {
	s/\s+$//;
	s/^\s+//;
	next if m/^\#/;
	next if m/^$/;

	my @d=split(/\|/,$_);
	my $game=lc($d[0]);

	push @games,$d[0];

	$ret{$game}{"realname"}=$d[0];
	$ret{$game}{"xml"}=$game.".xml";
	$ret{$game}{"dir"}=$d[0];
	$ret{$game}{"meta"}=$d[1];
	$ret{$game}{"factory"}=$d[2];
	$ret{$game}{"tables"}=$d[3];
	$ret{$game}{"cards"}=$d[4];
	$ret{$game}{"full"}=$d[5];

	my @t=split("-",$d[3]);

	$ret{$game}{"table0"}=$t[0];
	$ret{$game}{"table1"}=$t[1];
    }

    %games_dat=%ret;

    return %ret;
}

#
# info_full2name(fullname) - Convert full game name to short name.
#
sub info_full2name
{
    my $full=shift;
    my %info=read_games_dat();
    
    for(keys(%info))
    {
	return $_ if($info{$_}{"full"} eq $full);
    }
}

#
# info_get(game,var) - Get games.dat entry for a game.
#
sub info_get
{
    my $game=shift;
    my $var=shift;

    my %info=read_games_dat();

    return $info{lc($game)}{$var};
}
1;

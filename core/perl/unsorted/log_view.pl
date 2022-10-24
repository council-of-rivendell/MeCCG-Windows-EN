#!/usr/bin/perl -I perl

use gccg;

for $a (@ARGV)
{
	$game="Metw" if($a=~m/metw/i);
	$game="Pokemon" if($a=~m/pokemon/i);
	$game="Mtg" if($a=~m/mtg/i);
	$game="Lotr" if($a=~m/lotr/i);
}
die "$0: cannot identify the game" if($game eq "");

shift @ARGV if $ARGV[0] eq "metw" or $ARGV[0] eq "mtg" or $ARGV[0] eq "lotr" or $ARGV[0] eq "pokemon";

load_game($game);

while(<>)
{
	s/\#(\d+)\#/name(int($1))/ge;
	print;
}

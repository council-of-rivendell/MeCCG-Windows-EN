#!/usr/bin/perl -I ../perl -I perl

use gccg;

%attr = ();

# syntax: <game> <deck file to parse>

open(IN,"$ARGV[1]") or die("Can not read $ARGV[1] $!\n");

load_game($ARGV[0]);

while(<IN>)
{
	chomp;
	s/^\s+//;
	s/\s+$//;
	next if m/^#/;
	next if m/^$/;
	next if m/^Deck$/;
	next if m/^Sites$/;
	next if m/^site$/;
	
	my $count = 0;
	my $name = "";
	my $set = "";
	
	if( /^(\d)\s(.*)\s\((\S+)\)$/)
	{
		$count = $1;
		$name = $2;
		$set = $3;
	}
	elsif( /^(\d)\s(.*)$/ )
	{
		$count = $1;
		$name = $2;
	}

	$name=~tr/âêîôûáéíóúýäëïöüÿåÂÊÎÔÛÁÉÍÓÚÝÄËÏÖÜÅ/aeiouaeiouyaeiouyaAEIOUAEIOUYAEIOUA/;
	$name = "·".$name if(number("·".$name) >= 0);
	$set = set_of(number($name)) if($set=~/^$/);

	for ($i=0; $i<eval($count); $i++) {
		$attr{$set} = $attr{$set} . '"' . name(number($name)) . '",';
	}
}

foreach $f (keys %attr)
{
	print "fixed[XX]=FixedSet(\"".$f."\",(".$attr{$f}."));\n";
}

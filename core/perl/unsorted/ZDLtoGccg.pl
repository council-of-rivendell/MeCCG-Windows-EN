#!/usr/bin/perl -I ../perl -I perl

use gccg;

load_game("Lotr");

while(<>)
{
	chomp;
	s/^\s+//;
	s/\s+$//;
	s/• //;
	s/’/'/;
	next if /^; Deck list generated/;
	
	my $count = 0;
	my $name;
		
	if(/^; (\d) x (.+)$/) {
		$count = $1;
		$name = $2;
	} elsif (/^; (.+)$/) {
		$count = 1;
		$name = $1;
	}

	if($name=~/^.+$/) {
		$name=~tr/âêîôûáéíóúýäëïöüÿåÂÊÎÔÛÁÉÍÓÚÝÄËÏÖÜÅ/aeiouaeiouyaeiouyaAEIOUAEIOUYAEIOUA/;
		$name = "·".$name if(number("·".$name) >= 0);
		my @num=images($name);
		
		if(scalar @num>1) {
			print "$count $name (".set_of($num[scalar @num - 1]).")\n";
		} elsif(scalar @num==1) {
			print "$count $name\n";
		} else {
			die "Unknown card: $name, line=$_\n";
		}
	}
}

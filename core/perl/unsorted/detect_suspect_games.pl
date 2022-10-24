#!/usr/bin/perl -I ../perl -I perl

use Time::Local;

while(<>)
{
	chomp;
		
	if(/^(\d+).(\d+).(\d+) (\d+):(\d+):(\d+) Game started at the table \d+: (.+) vs\. (.+)$/) {
		$games{$7.$8} = timelocal($6, $5, $4, $1, $2-1, $3-1900);
	}
	elsif(/^(\d+).(\d+).(\d+) (\d+):(\d+):(\d+) Game '(.+) vs\. (.+)' ended at table .+: (lose|win)\s*$/) {
		my $delta = sprintf("%3d", (timelocal($6, $5, $4, $1, $2-1, $3-1900) - $games{$7.$8})/60);		
		print "$1/$2/$3 $4:$5:$6 - $delta min - $7 - $8\n" if($delta<5);
	}	
}

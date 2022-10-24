#!/usr/bin/perl -I perl

use gccg;

if($#ARGV < 0)
{
    print "\nusage: $0 <game> name|full-name|xml|game-dir|meta-port|factory-port|table-start|table-end|card-size\n";
    print "    or $0 games\n\n";
#    print "games:\n";
#    for(keys(%meta)) {
#	print "           $_\n";
#    }
    exit;
}

%data=read_games_dat();

$g=lc($ARGV[0]);

if($ARGV[0] eq "games") {
    for(keys(%data)) {
	print $data{$_}{"dir"},"\n";
    }
} elsif($ARGV[1] eq "meta-port") {
    print $data{$g}{"meta"},"\n";
} elsif($ARGV[1] eq "factory-port") {
    print $data{$g}{"factory"},"\n";
} elsif($ARGV[1] eq "table-start") {
    print $data{$g}{"table0"},"\n";
} elsif($ARGV[1] eq "table-end") {
    print $data{$g}{"table1"},"\n";
} elsif($ARGV[1] eq "card-size") {
    print $data{$g}{"cards"},"\n";
} elsif($ARGV[1] eq "game-dir") {
    print $data{$g}{"dir"},"\n";
} elsif($ARGV[1] eq "name") {
    print $data{$g}{"realname"},"\n";
} elsif($ARGV[1] eq "full-name") {
    print $data{$g}{"full"},"\n";
} elsif($ARGV[1] eq "xml") {
    print $data{$g}{"xml"},"\n";
}

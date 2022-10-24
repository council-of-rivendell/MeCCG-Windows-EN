#!/usr/bin/perl -I perl

use gccg;

load_game("Mtg");

if($#ARGV < 1)
{
	print "usage: $0 <player> <logfile>\n";
	exit;
}

scan_log(@ARGV);
#print_transactions();
print_cancel_commands();

sub scan_log
{
	my $player=shift;
	my $file=shift;

	open(F,$file) or die "$0: cannot open $file";
	while(<F>)
	{
		s/\s+$//;
		
		if(m/^\d\d\.\d\d\.\d\d\d\d \d\d:\d\d:\d\d $player buys \#(\d+)\# from (\w+) for \$(.+)\.$/)
		{
			$add_money{$2}-=$3;
			push @{$add_card{$2}},int($1);
		}
	}
	close(F);
}

sub print_transactions
{
	my $player;
	for(sort keys %add_money)
	{
		$player=$_;
		print $player," \$",$add_money{$player},"\n";
		for(@{$add_card{$player}})
		{
			print "  ",name($_),"\n";
		}
	}
}

sub print_cancel_commands
{
	my $player;
	print "/eval sleep(30)\n";
	for(sort keys %add_money)
	{
		$player=$_;
		print "Canceling transactions between $ARGV[0] and $player.\n";
		print "/give $player $add_money{$player}\n";
		for(@{$add_card{$player}})
		{
			print "/eval Send(\"GiveCard\",(\"$player\",$_))\n";
		}
		print "/eval sleep(20)\n";
	}
}

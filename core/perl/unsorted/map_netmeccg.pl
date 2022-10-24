#!/usr/bin/perl -I ../perl -I perl

use gccg;
use mysql;

load_game("Metw");

load_sql("/home/wigy/metw.sql");

make_map("METW","TW");
make_map("METD","TD");
make_map("MEDM","DM");
make_map("MELE","LE");
make_map("MEAS","AS");
make_map("MEWH","WH");
make_map("MEBA","TB");

#test1();
#test2("4LE118");
netmeccg_dump();

#
# Some data dumps
#

sub test1
{
	for(cards_of_set("LE"))
	{
		$id=$gccg_to_sql{$_};
		print "#$_ (id $id)\n";
		print $field{CardInfo}{$id}{nameEnglish};
		print "\n";
	}
}

sub test2
{
	my $id=shift;

	print "ID $id\n";
	for(sort keys %{$field{CardInfo}{$id}})
	{
		print " $_ '$field{CardInfo}{$id}{$_}'\n";
	}
}

sub netmeccg_dump
{
	print "cardmap{\"I\"}{\"NetMECCG\"}=(,);\n";
	print "cardmap{\"E\"}{\"NetMECCG\"}=(,);\n";
	for(sort keys %{$field{CardInfo}})
	{
		$netmeccg=$field{CardInfo}{$_}{netMeccgName};
		$netmeccg=~s/\"/\\\"/g;
		$netmeccg="\"$netmeccg\"";
		$gccg=$sql_to_gccg{$_};

		print "cardmap{\"I\"}{\"NetMECCG\"}{".lc($netmeccg)."}=$gccg;\n" if $gccg ne "";
		print "cardmap{\"E\"}{\"NetMECCG\"}{$gccg}=$netmeccg;\n" if $gccg ne "";
	}
}
	
#
# Make mapping between Wim's data and Gccg
#
sub make_map
{
	my $sql_set=shift;
	my $gccg_set=shift;
	my $name;
	my @im;
	my $opt=$game_option{"canonical key"};
	my $type;
	
	for(SELECT("CardInfo","setName",$sql_set))
	{
#		next if $field{CardInfo}{$_}{detRarity} eq "P";
		$name=$field{CardInfo}{$_}{nameEnglish};

		next if $name eq "A Pack at the Door" || $name eq "Swordmaster" || $name eq "Dwarven Axe" || $name eq "Ringil" || $name eq "Belegennon" || $name eq "Horn of Defiance" || $name eq "Wolf" || $name eq "Baugúr" || $name eq "Freca";
		
		$type=$field{CardInfo}{$_}{typeDescriptor};
		if($name eq "The Balrog" and $gccg_set eq "TB")
		{
			$type=" [B]";
		}
		elsif($type=~m/^Hero/)
		{
			$type=" [H]";
		}
		elsif($type=~m/^Minion/)
		{
			$type=" [M]";
		}
		else
		{
			$type="";
		}

		if($field{CardInfo}{$_}{detRarity} eq "P")
		{
			@im=images($name." (PR)");
		}
		else
		{
			@im=images($name."$type ($gccg_set)");
		}

		print STDERR "can't find a Gccg-card '$name$type ($gccg_set)'.\n" if($im[0]eq"");
		print STDERR "more than one Gccg-card matching '$name' in $gccg_set\n" if @im > 1;
		$sql_to_gccg{$_}=$im[0];
		$gccg_to_sql{$im[0]}=$_;
	}

	for(cards_of_set($gccg_set))
	{
		print STDERR "missing SQL data for '".name($_)."' from $gccg_set\n" if $gccg_to_sql{$_} eq "";
	}
}

#!/usr/bin/perl -I ../perl -I perl -I ../../core/perl

use gccg;

$part=-9999999;
%definitions=(); # Macro definitions

print "#\n";
print "# DECK RULES\n";
print "# ==========\n";
print "\n";
print "deck_rules=(,);\n";

while(<>)
{
	chomp;
	s/^\s+//;
	s/\s+$//;
	next if m/^#/;
	next if m/^$/;

	$line=$_;
	
	for(keys %definitions)
	{
		$line=~s/$_/$definitions{$_}/eg;
	}
	
	if(!is_card($card) && $line=~m/^Game\s+(.+)/)
	{
		$game=$1;
		load_game($game);
	}
	elsif($line=~m/^Define\s+(.+?)\s*=\s*(.*)/)
	{
		$definitions{$1}=$2;
	}
	elsif($line=~m/^Info\s+(.+)/)
	{
		print "server_description=\"$1\";\n";
	}
	elsif($line=~m/^Format\s+(.+)/)
	{
		print ");\n" if($part != -9999999);
		$part=-9999999;
		$system=$1;
		print "deck_rules{\"$system\"}=(,);\n";
	}
	elsif($line=~m/^Rules\s+for\s+(.+)/)
	{
		print ");\n" if($part != -9999999);
		$part=$1;
		$part="" if($part eq "all parts");
		print "deck_rules{\"$system\"}{\"$part\"}=(\n";
	}
	elsif($line=~m/^Otherwise ok$/)
	{
		print "  (\"RulePass\",NULL),\n";
	}
	elsif($line=~m/^Size\s+(\d+)(,\d+)*$/)
	{
		print "  (\"RuleDeckSizes\",($1$2)),\n";
	}
	elsif($line=~m/^Size\s+(\d+)-(\d*)$/)
	{
		print "  (\"RuleDeckMinimum\",$1),\n";
		print "  (\"RuleDeckMaximum\",$2),\n" if($2 ne "");
	}
	elsif($line=~m/^Limit\s+(any|\d+)$/)
	{
		$limit=$1;
	}
	elsif($line=~m/^Limit\s+(any|\d+)\s+for\s+each\s+card\s+having\s+(.+)$/)
	{
		my $n=$1 eq "any" ? 999999 : $1;
		my $exp=$2;
		$exp=~s{\"}{\\\"}g;
		print "  (\"RuleLimitEachByExpression\",($n,\"$exp\")),\n";
	}
	elsif($line=~m/^Limit\s+(any|\d+)\s+for\s+cards\s+having\s+(.+)$/)
	{
		my $n=$1 eq "any" ? 999999 : $1;
		my $exp=$2;
		$exp=~s{\"}{\\\"}g;
		print "  (\"RuleLimitByExpression\",($n,\"$exp\")),\n";
	}
	elsif($line=~m/^Check\s+'(.+?)'\s+using\s+(.+)$/)
	{
		my $txt=$1;
		my $exp=$2;		
		$txt=~s{\"}{\\\"}g;
		$exp=~s{\"}{\\\"}g;
		print "  (\"RuleCheckExpression\",(\"$txt\",\"$exp\")),\n";
	}
	elsif($line=~m/^General limit\s+(\d+)$/)
	{
		print "  (\"RuleCardLimitGeneral\",$1),\n";
	}
	elsif($line=~m/^Set\s+(\S+?)\s+limit\s+(\d+)$/)
	{
		print "  (\"RuleCardSet\",(\"$1\",$2)),\n";
	}
	elsif($line=~m/^Set\s+and\s+preprints\s+(\S+?)\s+limit\s+(\d+)$/)
	{
		print "  (\"RuleCardSetReprint\",(\"$1\",$2)),\n";
	}
	else
	{
		$card=$line;
		$canonical=0;
		$canonical=1 if($card=~s/\s\[.+\]$//);

		if(is_card($card))
		{
			if($limit eq "any")
			{
				print "  (\"RuleCardLimitAny\",\"$line\"),\n";
			}
			else
			{
				if($canonical)
				{
					print "  (\"RuleCanonicalCardLimitSingle\",(\"$line\",$limit)),\n";
				}
				else
				{
					print "  (\"RuleCardLimitSingle\",(\"$line\",$limit)),\n";
				}					
			}
		}
		else
		{
			die "$0: unregocnized rule or card '$_'";
		}
	}
}

print ");\n" if($part != -9999999);

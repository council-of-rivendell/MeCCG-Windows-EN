#!/usr/bin/perl
#
# To rescale game card drawing options.
#

$factor=2.0;

sub resize
{
	my $old;
	
	foreach(@_)
	{
		$old=$_;
		if(s{(.*<option name=\".+?(font size|border)\" value=\")(.+?)(\"/>.*)}{"$1".($factor * $3)."$4"}e)
		{
			print "Change: $old     => $_";
		}
		elsif(s{(.*<option name=\".+?(title|title box|image|text box|text \d+|box \d+)\" value=\")(.+?),(.+?),(.+?),(.+?)(\"/>.*)}{"$1".($factor * $3).",".($factor * $4).",".($factor * $5).",".($factor * $6)."$7"}e)
		{
			print "Change: $old     => $_";
		}
	}
}

open(FILE,$ARGV[0]) or die "$0: cannot open '$ARGV[0]'";
@file=<FILE>;
resize(@file);
close(FILE);
open(FILE,">".$ARGV[0]);
foreach(@file)
{
	print FILE $_;
}
close(FILE);

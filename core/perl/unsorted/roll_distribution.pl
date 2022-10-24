#!/usr/bin/perl

while(<>)
{
    if(m/ (\w+) rolls \d+\+\d+=\{orange\}(\d+)/)
      {
	  $total{$2}++;
	  $sum{$1}{$2}++;
      }
}

foreach(keys(%sum))
{
	print "\n$_\n";
	$avg=0.0;
	$n=0;
	for($i=2; $i<=12; $i++)
	{
		$avg+=$sum{$_}{$i}*$i;
		$n+=$sum{$_}{$i};
		print "$i ".$sum{$_}{$i}."\n";
	}

	print "avg: ".($avg/$n)." ($n rolls)\n";
}

print "\nTotal:\n";
$avg=0.0;
$n=0;
for($i=2; $i<=12; $i++)
{
    print "$i ".$total{$i}."\n";
    $avg+=($total{$i})*$i;
    $n+=$total{$i}
}
print "avg: ".($avg/$n)."  ($n rolls)\n";

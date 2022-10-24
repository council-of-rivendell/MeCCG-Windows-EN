#!/usr/bin/perl

@stack=();
foreach $f (@ARGV)
{
	open(F,$f);
	while(<F>)
	{
		next if m/^\s*\#/;
		push @stack,$1 if m/^\s*push\s*\((.+?)\)/;
		if(m/^\s*(.+?)\s*=\s*pop\(\)/)
		{
			$v=pop @stack;
			print "$f $.: push($v) does not match with $1=pop()\n" if $1 ne $v;
		}
	}
	close(F);
}
foreach $f (@stack)
{
	print "STACK: $f\n";
}


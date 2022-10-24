#!/usr/bin/perl


@dirs=(".");
@dirs=@ARGV if(@ARGV);
cleanup($_) for(@dirs);

#
# cleanup(dir) - remove all gccg packages not listed in 
#                'available.xml' at the directory 'dir'.
#
sub cleanup
{
    my $dir=shift;
    my %available=read_available($dir);
    my $count=0;

    print "Found ",scalar(keys %available)," packages from $dir\n";
    opendir(DIR,$dir);
    for(sort readdir(DIR))
    {
	if(m/gccg-.+-[.0-9]+\.tgz/)
	{
	    if(not $available{$_})
	    {
		$count++;
		print "Deleting old $_\n";
		unlink("$dir/$_") or die "$0: delete failed for $dir/$_";
	    }
	}
    }

    closedir(DIR);
    print "Done ($count deleted)\n\n";
}

#
# read_available(dir) - return dictionary of gccg packages found from the
#                       'available.xml' at the directory 'dir'.
#
sub read_available
{
    my $file=shift;
    my %files;

    $file.="/available.xml";
    open(F,$file) or die "$0: cannot read $file";
    while(<F>)
    {
	if(m/<module name="(.+?)" version="(.+?)">/)
	{
	    $files{"gccg-$1-$2.tgz"}=1;
	}
    }
    close(F);

    return %files;
}

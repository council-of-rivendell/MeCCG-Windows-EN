#!/usr/bin/perl

sub kill_file
{
    my $path=shift;
    print "Deleting $path\n";
    if(-d $path) {
	rmdir($path) or die "Cannot delete $path.";
    } else {
	unlink($path) or die "Cannot delete $path.";
    }
}

sub scan_path
{
    my $path=shift;
    my $kill=shift;
    my $dir;
    my @files;
    my @dirs;

    $path=~s|/$||;

    die "no such directory as '$path'" if ! -d $path;
    opendir($dir,$path);
    while($f=readdir($dir)) {
	next if $f eq "." || $f eq "..";
	$f="$path/$f";
	if(-d $f) {
	    push @dirs,$f;
	} else {
	    push @files,$f;
	}
    }
    closedir($dir);

    for(@files) {
	if(m/^.+~$/) {
	    kill_file $_;
	} elsif($kill) {
	    kill_file $_;
	}
    }
    for(@dirs) {
	my $dir=$_;
	s|^.*/||;
	if(m/^\.svn$/) {
	    scan_path($dir,1);
	} else {
	    scan_path($dir,$kill);
	}
    }

    kill_file $path if $kill;
}

if($#ARGV < 0) {
    print "usage: $0 <path>\n";
    exit;
}

scan_path($ARGV[0],0);

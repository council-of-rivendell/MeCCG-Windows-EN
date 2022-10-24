#!/usr/bin/perl -I perl

use gccg;
use Image::Size;

my $game;
my $set;
my $verbose=0;
my $testing=0;

sub mangle
{
    my $file=lc(shift);

    $file=~s/(.*)\.(jpg|png|gif)/$1/;
    $file=~s/[^a-z]//g;

    return $file;
}

sub init
{
    load_game($game);
}

sub sys
{
    my $cmd=shift;

    system($cmd) if !$testing;
    print "RUN: $cmd\n" if $testing;
}

sub cmd_check
{
    my $ok=0;
    my $miss=0;
    my $bad=0;
    my $total=0;
    my $size=0;

    for(graphics_files($set)) {
	$phys{$_}=1;
	$mangled{mangle($_)}=$_;
	print "MANGLED: $_ => ",mangle($_),"\n" if $mangled;
    }

    $sz=card_size($game);

    for(sort(cards_of_set($set)))
    {
	$total++;
	$pic=image($_);
	$real{$pic}=1;
	$ok++ if $phys{$pic};

	if(!$phys{$pic}) {

	    $miss++;
	    print "MISSING: $pic\n" if $verbose;
	    print "MANGLED: $pic => ",mangle($pic),"\n" if $mangled;
	    if($mangled{mangle($pic)}) {
		print "MAYBE: ",$mangled{mangle($pic)}," is $pic\n";
	    }
	} else {
	    $src=graphics_dir($set)."/".$pic;
	    my ($x, $y) = Image::Size::imgsize($src);
	    $s=$x."x".$y;
	    $s2=$y."x".$x;
	    if($s ne $sz && $s2 ne $sz) {
		$size++;
		print "SIZE: $pic is $s instead of $sz\n" if $verbose;
	    }
	}
    }

    for(sort(graphics_files($set))) {
	print "UNUSED: $_\n" if $verbose and !$real{$_};
	$bad++ if !$real{$_};
    }

    print "$ok/$total images OK\n";
    print "$miss/$total images missing\n";
    print "$bad unused files\n";
    print "$size of wrong size\n";

    print "PERFECT\n" if($ok==$total && $bad==0 && $size==0);
}

sub cmd_move
{
    for(graphics_files($set)) {
	$phys{$_}=1;
	$mangled{mangle($_)}=$_;
    }

    for(sort(cards_of_set($set)))
    {
	$pic=image($_);

	if(!$phys{$pic}) {

	    if($mangled{mangle($pic)}) {

		$src=$mangled{mangle($pic)};
		$dst=$pic;
		print "MOVE: $src => $dst\n";
		$src=graphics_dir($set)."/".$src;
		$dst=graphics_dir($set)."/".$dst;
		sys("mv \"$src\" \"$dst\"");
	    }
	}
    }
}

sub cmd_delete
{
    for(sort(cards_of_set($set)))
    {
	$pic=image($_);
	$real{$pic}=1;
    }

    for(sort(graphics_files($set))) {
	if(!$real{$_}) {
	    print "DELETE: $_\n";
	    $f=graphics_dir($set)."/$_";
	    sys("rm \"$f\"");
	}
    }
}

sub cmd_resize
{
    $sz0=card_size($game);
    $sz=card_size($game);
    $sz=~s/x/!x/;
    $sz.="!";

    for(graphics_files($set)) {
	$phys{$_}=1;
    }

    for(sort(cards_of_set($set)))
    {
	$pic=image($_);
	if($phys{$pic}) {
	    $f=graphics_dir($set)."/$pic";
	    my ($x, $y) = Image::Size::imgsize($f);
	    $s=$x."x".$y;
	    $s2=$y."x".$x;
	    if($s ne $sz0 && $s2 ne $sz0) {
		$sz0=~m/(\d+)x(\d+)/;
		$x0=$1;
		$y0=$2;
		if(abs($x0-$x) + abs($y0-$y) > abs($y0-$x) + abs($x0-$y)) {
		    $sz="$y0!x$x0!";
		}
		print "RESIZING: $f from $s to $sz\n";

		sys("mogrify -geometry \"$sz\" \"$f\"");
	    }
	}
    }
}

while(substr($ARGV[0],0,1) eq "-") {
    if($ARGV[0] eq "-v") {
	$verbose=1;
    }
    if($ARGV[0] eq "-m") {
	$mangled=1;
    }
    if($ARGV[0] eq "-t") {
	$testing=1;
    }
    shift @ARGV;
}

if($#ARGV < 2)
{
    print "usage: $0 [options] <game> <set abbrev> <command>\n";
    print "   options:\n";
    print "      -v show files when handled\n";
    print "      -m print mangled file names\n";
    print "      -t do not make any actions (show command instead)\n";
    print "   commands:\n";
    print "      check   check the graphics situation\n";
    print "      move    move files\n";
    print "      delete  delete unused files\n";
    print "      resize  resize all images to the standard size\n";
    exit;
}

$game=ucfirst($ARGV[0]);
$set=$ARGV[1];
init();
$command="cmd_".$ARGV[2];
&$command();

#!/usr/bin/perl -I perl
#
# This proxy-creator requires 'convert' program from ImageMagic and LaTeX with
# graphicx-package installed.
#

use gccg;
my $smaller=0;

if($#ARGV < 0)
{
    print "usage: $0 [--smaller] <deck>\n";
    exit;
}

if($ARGV[0] eq "--smaller") {
    $smaller=1;
    shift;
}

%deck=read_deck($ARGV[0]);
for(keys(%deck)) {
    for(@{$deck{$_}})
    {
	push @card,graphics($_);
    }
}

create_auxliary();
create_empty_cards();
system("rm -rf sheet*.ps");

$n=0;
$a=0;
for(@card) {

    print "Converting $_\n";

    $n++;
    system("convert \"$_\" card${n}.eps 2> /dev/null");

    if($n==9)
    {
	$a++;
	$n=0;
	print "FULL\n";
	system("latex sheet > /dev/null");
	system("dvips -o sheet.ps sheet.dvi");
	system("mv sheet.ps sheet$a.ps");
	print "SHEET $a READY\n";
	create_empty_cards();
    }
}

if($n)
{
	$a++;
	system("latex sheet > /dev/null");
	system("dvips -o sheet.ps sheet.dvi");
	system("mv sheet.ps sheet$a.ps");
	print "SHEET $a READY\n";
}

cleanup();

sub create_auxliary
{
    my $w=63;
    my $h=87;

    if($smaller)
    {
	$w-=3;
	$h-=3;
    }
	open(F,">sheet.tex");
	print F "
\\documentclass{article}\\usepackage{graphicx}
\\lineskip 0mm\\parindent -40mm\\parskip 0mm\\textwidth 15cm\\textheight 40cm\\topmargin -30mm
\\begin{document}\\pagestyle{empty}
\\includegraphics[width=${w}mm,height=${h}mm]{card1.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card2.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card3.eps}

\\includegraphics[width=${w}mm,height=${h}mm]{card4.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card5.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card6.eps}

\\includegraphics[width=${w}mm,height=${h}mm]{card7.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card8.eps}\\includegraphics[width=${w}mm,height=${h}mm]{card9.eps}
\\end{document}
";
	close(F);
	open(F,">empty_card.eps");
	print F "%!PS-Adobe-3.0 EPSF-3.0
%%Creator: Gccg
%%Title: empty_card.eps
%%CreationDate: Sun Oct 12 19:42:05 2003
%%DocumentData: Clean7Bit
%%LanguageLevel: 2
%%Pages: 1
%%BoundingBox: 14 14 16 16
%%EndComments
%%BeginProlog
% Use own dictionary to avoid conflicts
10 dict begin
%%EndProlog
%%Page: 1 1
% Translate for offset
14.173228 14.173228 translate
% Translate to begin of first scanline
0.000000 1.000000 translate
1.000000 -1.000000 scale
% Image geometry
1 1 8
% Transformation matrix
[ 1 0 0 1 0 0 ]
% Strings to hold RGB-samples per scanline
/rstr 1 string def
/gstr 1 string def
/bstr 1 string def
{currentfile /ASCII85Decode filter /RunLengthDecode filter rstr readstring pop}
{currentfile /ASCII85Decode filter /RunLengthDecode filter gstr readstring pop}
{currentfile /ASCII85Decode filter /RunLengthDecode filter bstr readstring pop}
true 3
%%BeginData:           32 ASCII Bytes
colorimage
!<7Q~>
!<7Q~>
!<7Q~>
%%EndData
showpage
%%Trailer
end
%%EOF
";
	close(F);
}

sub cleanup
{
	unlink("sheet.tex");
	unlink("sheet.ps");
	unlink("sheet.log");
	unlink("sheet.dvi");
	unlink("sheet.aux");
	unlink("sheet.aux");
	unlink("empty_card.eps");
	unlink("card1.eps");
	unlink("card2.eps");
	unlink("card3.eps");
	unlink("card4.eps");
	unlink("card5.eps");
	unlink("card6.eps");
	unlink("card7.eps");
	unlink("card8.eps");
	unlink("card9.eps");
}

sub create_empty_cards
{
	system("cp empty_card.eps card1.eps");
	system("cp empty_card.eps card2.eps");
	system("cp empty_card.eps card3.eps");
	system("cp empty_card.eps card4.eps");
	system("cp empty_card.eps card5.eps");
	system("cp empty_card.eps card6.eps");
	system("cp empty_card.eps card7.eps");
	system("cp empty_card.eps card8.eps");
	system("cp empty_card.eps card9.eps");
}


use locale;
use POSIX qw(locale_h);

setlocale(LC_CTYPE,"fi_FI");

#
# Convert a name to reasonable outfit.
#
sub fix_case($)
{
	my $txt=lc(shift);
	$txt=~s/^(.)/uc($1)/ge;
	$txt=~s/ (.)/" ".uc($1)/ge;
	$txt=~s/\((.)/"(".uc($1)/ge;
	$txt=~s/\s(The|That|This|Out|With|An|By|As|For|On|A|Or|Of|In|Into|At|Upon|And|To|From)\b/" ".lc($1)/ge;

	return $txt;
}

#
# Print header of the xml-file.
#
sub print_header($$$$)
{
	my $setname=shift;
	my $dir=shift;
	my $abbrev=shift;
	my $game=shift;
	
	print "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
	print "<!DOCTYPE ccg-setinfo SYSTEM \"../gccg-set.dtd\">\n";
	print "<ccg-setinfo name=\"$setname\" dir=\"$dir\" abbrev=\"$abbrev\" game=\"$game\">\n";
	print "  <cards>\n\n";
}

#
# Print footer of the xml-file.
#
sub print_footer()
{
	print "  </cards>\n";
	print "</ccg-setinfo>\n";
}

#
# Encode special characters to valid xml.
#
sub encode_xml($)
{
	my $text=shift;
	
    $text=~s/&/&amp;/g;
    $text=~s/\"/&quot;/g;

	return $text;
}

#
# Output a card data using the content of the following globals:
#
# $title - card name
# $text - text of the card
# $attr{attribute} - attributes
# $back - backside image number
# $front - frontside image number
# $hidden - if this is hidden card
#
sub print_card()
{
	fix_card();

	$graphics=$title;
	
	$graphics=~tr/âêîôûáéíóúýäëïöüÿåÂÊÎÔÛÁÉÍÓÚÝÄËÏÖÜÅ/aeiouaeiouyaeiouyaAEIOUAEIOUYAEIOUA/;
	$graphics=~s/\W//g;
	$graphics.=".jpg";
	$graphics=~s/^(.)/uc($1)/e;

	die "$0: print_card: no title defined" if($title eq "");
	
	my $f;
	my $g;
	my $atrs;

	$count_graphics{$graphics}++;
	$graphics=~s/\.jpg$/$count_graphics{$graphics}.".jpg"/e if($count_graphics{$graphics} > 1);
		
	
	
	$atrs.=" back=\"$back\"" if($back > 0);
	$atrs.=" front=\"$front\"" if($front > 0);
	$atrs.=" hidden=\"1\"" if($hidden);
	
	print "    <card name=\"".encode_xml($title)."\" graphics=\"$graphics\"$atrs text=\"".encode_xml($text)."\">\n";
	
	foreach $f (keys %attr)
	{
		$g=$f;
		$g=~s/ /_/g;
		print "       <attr key=\"$g\" value=\"".encode_xml($attr{$f})."\"/>\n";
	}
	print "    </card>\n\n";

	%attr=();
	$title="";
	$text="";
	$back=0;
	$front=0;
	$hidden=0;
}

1;

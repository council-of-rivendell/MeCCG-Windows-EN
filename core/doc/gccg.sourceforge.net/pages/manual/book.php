<?
$counter_h1=0;
$counter_h2=0;
$counter_h3=0;
$counter_fig=0;
$counter_tbl=0;
$counter_ex=0;

function d()
{
    echo "<pre>";
    foreach(func_get_args() as $d)
        var_dump($d);
    echo "</pre>";
}

function h1($title)
{
	global $counter_h1,$counter_h2,$counter_h3;
	$counter_h3=0;
	$counter_h2=0;
	$counter_h1++;
	print "$counter_h1. <a name=\"sec${counter_h1}.\">$title</a>";
}
function h2($title)
{
	global $counter_h1,$counter_h2,$counter_h3;
	$counter_h3=0;
	$counter_h2++;
	print "$counter_h1.$counter_h2. <a name=\"sec${counter_h1}.${counter_h2}.\">$title</a>";
}
function h3($title)
{
	global $counter_h1,$counter_h2,$counter_h3;
	$counter_h3++;
	print "$counter_h1.$counter_h2.$counter_h3. <a name=\"sec${counter_h1}.{$counter_h2}.${counter_h3}.\">$title</a>";
}
function fig($title)
{
	global $counter_fig;
	$counter_fig++;
	print "<a name=\"pic${counter_fig}.\">Fig.".($counter_fig).": $title</a>\n";
}
function tbl($title)
{
	global $counter_tbl;
	$counter_tbl++;
	print "<a name=\"tbl${counter_tbl}.\">Tbl.".($counter_tbl).": $title";
}
function ex($title)
{
	global $counter_ex;
	print "Ex.".(++$counter_ex).": $title";
}
function create_toc($file)
{
	read_toc_from_file(dirname(__FILE__)."/../".$file);
}

function read_toc_from_file($filename)
{
	global $ref,$tblref,$figref,$n1,$n2,$n3;
	$f=fopen($filename,"r");
	if($f)
	{
	    while(1)
	    {
		if(feof($f))
		    break;

		$line=fgets($f,9999);
		
		if(preg_match('/<\?\s*(h[1-3]|tbl|fig)\("(.*?)"\)\s*;?\s*\?>/',$line,$match))
		{
		    if($match[1]=="h1")
		    {
			$n1++;
			$n2=0;
			$n3=0;
			$ref[$match[2]]="$n1.";
			print "<b>$n1. <a href=\"#sec$n1.\">".$match[2]."</a></b><br>\n";
		    }
		    else if($match[1]=="h2")
		    {
			$n2++;
			$n3=0;
			$ref[$match[2]]="$n1.$n2.";
			print "$n1.$n2. <a href=\"#sec${n1}.$n2.\">".$match[2]."</a><br>\n";
		    }
		    else if($match[1]=="h3")
		    {
			$n3++;
			$ref[$match[2]]="$n1.$n2.$n3.";
			print "$n1.$n2.$n3. <a href=\"#sec${n1}.${n2}.${n3}.\">".$match[2]."</a><br>\n";
		    }
		    else if($match[1]=="tbl")
		    {
			$nt++;
			$tblref[$match[2]]="$nt.";
		    }
		    else if($match[1]=="fig")
		    {
			$nf++;
			$figref[$match[2]]="$nf.";
		    }
		}
		else if(preg_match('/<\?\s*include\(\"(.*)\"\)\s*\?>/',$line,$match))
		{
		    if($match[1]!="book.php")
			read_toc_from_file($match[1]);
		}
	    }
	    fclose($f);
	}
	else
	{
	    print "Cannot read Table of Contents\n";
	}
}

function ref($key)
{
	global $ref,$tblref,$figref;

	if($ref[$key]!="")
		print "<a href=\"#sec".$ref[$key]."\">".$ref[$key]."</a>";
	else if($tblref[$key]!="")
		print "<a href=\"#tbl".$tblref[$key]."\">".$tblref[$key]."</a>";
	else if($figref[$key]!="")
		print $figref[$key];
	else
		print "?.?.";
}
?>
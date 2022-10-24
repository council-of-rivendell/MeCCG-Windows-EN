<?php

// Debug pring.
function d()
{
    echo "<hr>";
    foreach(func_get_args() as $arg)
    {
        echo "<pre><b>DEBUG:</b><br>";var_dump($arg);echo "</pre>";
    }
    echo "<hr>";
}

//creates rounded corner upper border for boxes, headers etc
function upperborder($var)
{
echo  "<div>
<b class=\"".$var."\">
<b class=\"".$var."1\"><b></b></b>
<b class=\"".$var."2\"><b></b></b>
<b class=\"".$var."3\"></b>
<b class=\"".$var."4\"></b>
<b class=\"".$var."5\"></b>
</b> <div class=\"".$var."_content\">";
}

//creates rounded corner lowerborder for boxes, headers etc
function lowerborder($var)
{
echo "</div>
<b class=\"".$var."\">
<b class=\"".$var."5\"></b>
<b class=\"".$var."4\"></b>
<b class=\"".$var."3\"></b>
<b class=\"".$var."2\"><b></b></b>
<b class=\"".$var."1\"><b></b></b>
</b>
</div>";
}

// Find a file from web site directory.
function FindFile($dir,$pattern)
{
    $files=glob("../$dir/$pattern");
    rsort($files);

    return $files[0];
}

// Generate URL to file.
function FindFileURL($dir,$pattern)
{
    $f=FindFile($dir,$pattern);

    if(!$f)
        echo "<font color=red>FILE UNAVAILABLE</font>\n";
    else
    {
        $url="http://gccg.sourceforge.net/$dir/".basename($f);
        echo "<a href=\"$url\">$url</a>";
    }
}

// Returns the link to FIRST file having $pattern in its name from the $dir folder
// The link has label set to $label
function LinkToFileLabel($dir,$pattern,$label)
{
    $f=FindFile($dir,$pattern);

    if(!$f)
        echo "<font color=red>FILE UNAVAILABLE</font>\n";
    else
        echo "<a href=\"$f\">$label</a>\n";
}

// Generates all the thumb-links list from $dir folder
function ThumbMaker($dir)
{

	$files=glob("$dir/thumb*.jpg");
        sort($files);
	foreach($files as $f)
	{
		$t=preg_replace("/thumb/", "screenshot", $f);
		echo "<a href=\"$t\"><img src=\"$f\"></a>\n";

	}

}

// Generates a table of avatars alphabetically sorted in $colnum columns 
function AvatarLister($colnum)
{
	$dir="../graphics/avatar/";
	$i=0;
	$ret=array();
	
	if ($handle = opendir("../graphics/avatar/")) 
	{
    	while (false !== ($file = readdir($handle))) 
    	{
        if ($file != "." && $file != "..") 
        	array_push($ret, $file);
        }
        
        closedir($handle);
        
        sort($ret);
        
        foreach($ret as $f)
        	{
        	if ($i%$colnum==0) 
        		echo "<tr>";
        	$label=preg_replace("/.png/", "", $f);
            echo "<td><img src=\"$dir$f\"></td><td width=\"100\"><center>$label</center></td>";           
            $i++;
        	}	
    }
}

?>
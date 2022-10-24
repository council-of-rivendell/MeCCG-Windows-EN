<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>

<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Windows Installation</h1>
<?php

lowerborder("header");

?>
<br>

<p>
	If you are interested in development, you should install Gccg with Cygwin as explained in the
	<a href="cygwin.php" target="_self">Cygwin Installation guide</a>. <br><br>
	
	Otherwise:
		
		<li>download the
	   
	  	<?php

			LinkToFileLabel("downloads","gccg_install.zip","General Windows Installer")   ;

		?>

		;</li> 
		<li>unpack all files to your harddrive;</li>
		<li>run the game installer
			<ul><tt>Install &lt;Game&gt;.bat</tt></ul>
	<!--where <tt>&lt;game&gt;</tt> may be <tt>chtulu</tt>, <tt>lotr</tt>, <tt>metw</tt>, <tt>mtg</tt>, <tt>nr</tt> or <tt>pokemon</tt>-->
	where <tt>&lt;game&gt;</tt> may be <tt>lotr</tt>, <tt>metw</tt>, <tt>mtg</tt> or <tt>pokemon</tt>
	</li>
	  
	<ul></ul>
	<br>
	<br>
	<?php

	upperborder("header");

	?>
	<h2>&nbsp;Running the Game</h2>
	<?php

	lowerborder("header");

	?>	
	<br>
	  
	  Each game module has a startup script with the same name as the module, with capitalized first letter and .bat extension. You can launch the game using it. <br><br> 
	  i.e. for metw module run
	<ul>
	<tt>Metw.bat</tt>
	</ul>
	
	<br>
	<br>
	<?php

	upperborder("header");

	?>

	<h2>&nbsp;Adding Card Images</h2>


	<?php

	lowerborder("header");

	?>
	<br>
	
	Also card images can be installed using the .bat script referring to the graphics you want to install. <br><br>
	i.e. to install metw card images run
	
	<ul>
	<tt>Install METW cards.bat</tt>
	</ul>
	
	<br>
	<br>
	<?php

	upperborder("header");

	?>

	<h2>&nbsp;Keeping Gccg Up to Date</h2>


	<?php

	lowerborder("header");

	?>
	<br>
	
	To update all installed packages run
	<ul>
	<tt>Update Everything.bat</tt>
	</ul>
	<br>	  

<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>
</p>
</body>
</html>
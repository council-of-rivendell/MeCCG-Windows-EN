<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>

<?php

include("header.php");

upperborder("header");

?>

<h1>&nbsp;Gygwin Installation</h1>


<?php

lowerborder("header");

?>
<br>

<p>

<li>Download the <a href="http://www.cygwin.com/" target="_blank">Cygwin</a> installer;</li>
<li>Run the installer and chose the <tt>Install from the Internet</tt> option</li>
<li>Give all the options you are requested until you are given the list of components available for installation: check that all categories are set to <tt>Default</tt> and then click <tt>View</tt> to change it to <tt>Full</tt>. Scroll the list and make sure packages <tt>perl</tt> and <tt>wget</tt> are included</li>
<li>You can now start a terminal window running the <tt>Gygwin.bat</tt> script and use the following commands:
	     <ul>
	     <tt>
	     mkdir gccg<br><br>
	     cd gccg<br><br>
	     wget 
	     
		<?php

			FindFileURL("modules","gccg-core-*.tgz");

		?>
		<br><br>
		
	     tar xzvf 
	     
	     <?php
                echo basename(FindFile("modules","gccg-core-*.tgz"));
	     ?>
	     <br><br>
	     ./gccg_package install client windows32 fonts-windows<br><br>
	     </tt>
	     </ul>
	     </li>
	     
	     You can finally use gccg_package to install the game modules<br><br>
	
	<li>View the list available modules
	<ul>
	<tt>
	./gccg_package status
	</tt>
	</ul>
	</li>
	
	<li>Install game modules you wish to play
	<ul>
	
	<tt>
	./gccg_package install &lt;game&gt;
	</tt>
	</ul>	
	<!--where <tt>&lt;game&gt;</tt> may be <tt>chtulu</tt>, <tt>lotr</tt>, <tt>metw</tt>, <tt>mtg</tt>, <tt>nr</tt> or <tt>pokemon</tt>-->
	where <tt>&lt;game&gt;</tt> may be <tt>lotr</tt>, <tt>metw</tt>, <tt>mtg</tt> or <tt>pokemon</tt>
	</li>
	
	<ul></ul>
	
	If you used the default setup Gccg will be in <tt>C:\Cygwin\home\[username]\gccg\</tt>
	
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
	
	Card images can be installed using the .bat script referring to the graphics you want to install. <br><br>
	i.e. to install metw card images run
	
	<ul>
	<tt>Install METW cards.bat</tt>
	</ul>
	
	They can be installed also using the gccg_package. <br><br>
	i.e. to install metw card images run
	
	<ul>
	<tt>./gccg_package install metw-cards*</tt>
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
	
	To update all installed packages, run:
	<ul>
	<tt>Update Everything.bat</tt>
	</ul>
	
	
	either way you can use gccg_package:
	<ul>
	<tt>./gccg_package update</tt>
	</ul>
	<br>	  

	Note: You may need to do <tt>chmod a+x *</tt> if windows binary package windows32 is updated.
	
	<ul></ul>
	<br>
	<br>
	<?php

	upperborder("header");

	?>

	<h2>&nbsp;Common Problems</h2>


	<?php

	lowerborder("header");

	?>
	<br>

If you encounter <tt>"The application fails to initialize properly"</tt> you may try opening a Cygwin terminal, go to the Gccg folder and use:
<ul>
<tt>chmod a+x *</tt><br>
</ul>


Sometimes it seems that for some reason double-clicking <tt>Game.bat</tt> does not work. You can also try to launch the game from cygwin using command: 
<ul>
<tt>sh Mtg --user nickname</tt>.
</ul>


<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>
</p>


</body>
</html>
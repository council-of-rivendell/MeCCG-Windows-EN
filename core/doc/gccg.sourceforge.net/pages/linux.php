<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>
<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;GNU/Linux Installation</h1>
<?php

lowerborder("header");

?>
<br>

<p>

<li>
Install <tt>SDL</tt>, <tt>SDL_image</tt>, <tt>SDL_net</tt>, <tt>SDL_ttf</tt> and <tt>SDL_mixer</tt> using your distribution's package manager (i.e. apt, yum, yast etc...)
</li>
	
	
	<li>
	In a terminal type the following commands
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
	./gccg_package install client fonts linux-i386<br><br>
	
	</tt>
	</ul>
	
	If everything went right you can finally use gccg_package to install the game modules<br><br>
	
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
	
	Each game module has a startup script with the same name as the module, with capitalized first letter. You can launch the game using it. <br><br>
	i.e. for metw module
	<ul>
	<tt>./Metw</tt>
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
	
	Also card images can be installed using the gccg_package. <br><br>
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
	
	To update all installed packages, do:
	<ul>
	<tt>./gccg_package update</tt>
	</ul>
	<br>	  

<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>	
</p>

</body>
</html>
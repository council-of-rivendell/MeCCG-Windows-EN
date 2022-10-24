<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>
<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Source Installation</h1>
<?php

lowerborder("header");

?>
<br>

	<p>
	Gccg should easily compile on any platform with SDL, so make sure that you have libraries, including headers:
	<ul>
	<li><a href="http://www.libsdl.org/download-1.2.php" target="_blank">SDL 1.2+</a>, compiled against jpeg and png;
	<li><a href="http://www.libsdl.org/projects/SDL_image/" target="_blank">SDL_image</a>;
	<li><a href="http://www.libsdl.org/projects/SDL_net/" target="_blank">SDL_net</a>;
	<li><a href="http://www.libsdl.org/projects/SDL_ttf/" target="_blank">SDL_ttf</a>;
	<li><a href="http://www.libsdl.org/projects/SDL_mixer/" target="_blank">SDL_mixer</a>.
	</ul>
	
	<li>Create a gccg directory;</li>
	<li>Download the 
	<?php

		LinkToFileLabel("modules","gccg-core*.tgz","Core Module") ;

	?>
	
	to the gccg directory and unpack it;</li>
	<li>You can now use the package manager script, named gccg_package, to install the modules you need: client, fonts and source</li>
	<ul>
	<tt>./gccg_package install client fonts source</tt>
	</ul>
	
	<li>Compile
	<ul>
	<tt>make all</tt>
	</ul>
	</li>
	
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
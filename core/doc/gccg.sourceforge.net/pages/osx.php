<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>

<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Os X Installation</h1>
<?php

lowerborder("header");

?>
<br>

<p>
To install Gccg on Mac Os X you'll have to build it from source code so, first of all, you'll need to install the development tools for your operating system i.e. <a href="http://developer.apple.com/TOOLS/xcode/" target="_blank">Xcode</a>.<br><br>

Now you can either go to the <a href="source.php" target="_self">Source Installation guide</a>, or keep reading this page to install Gccg the fast way. If you are not a source guru just keep reading.<br><br>
 
	   Since you'll have to install all the libraries needed to build Gccg (i.e. jpeg, libpng, SDL, SDL_image, SDL_mixer, SDL_net and SDL_ttf) you should install <a href="http://www.finkproject.org/" target="_blank">Fink</a> & <a href="http://sourceforge.net/projects/finkcommander/" target="_blank">Fink Commander GUI</a> and use it to install all the libraries listed above.<br><br>
	   In Fink Commander GUI they are listed as follows as of (6/25/2009)<br>
		<ul>
			<li>libjpeg</li>
			<li>libpng3</li>
			<li>sdl</li>
			<li>sdl-image</li>
			<li>sdl-mixer</li>
			<li>sdl-net</li>
			<li>sdl-ttf</li>
		</ul>
	     
	     <li>Once all the requirements to compile gccg have been satisfied open a terminal window and type the following commands:<br>
	     
	     <ul>
	     <tt>
	     mkdir gccg<br><br>
	     cd gccg<br><br>
	     curl  -O 
	     <?php

			FindFileURL("modules","gccg-core-*.tgz");

		 ?>
		
		<br><br>
		
		tar xzvf 
	     
		<?php

                echo basename(FindFile("modules","gccg-core-*.tgz"));	     
	     
		?>
	    
	    <br><br>
	     </tt>
	     </ul>
	     </li>
	     
	     <li>Now you can either install the binary version with this command<br>
	     
	     <ul>
	     <tt>
	     ./gccg_package install client fonts darwin-i386<br>
	     </tt>
	     </ul>
	     </li>
	     
	     <li>Otherwise you can compile using the following lines
	<ul>
	<tt>
	./gccg_package install client fonts source<br><br>
    make all<br><br>
    </tt>
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
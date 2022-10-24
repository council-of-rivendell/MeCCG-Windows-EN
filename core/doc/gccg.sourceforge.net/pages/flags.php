<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>
<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Game Options Reference</h1>
<?php

lowerborder("header");

?>
<br>

	<p>
	
	In the following tables you can find the list of the flags you may use to start gccg.<br>
	To use them you must edit your launcher (i.e. Cthulu.bat, Metw.bat, Nr.bat...), or append them to the command line, like shown in the examples at the end of this page.
	
	<ul></ul>
	<br>
	<br>
	<?php

	upperborder("header");

	?>
	<h2>&nbsp;Game Option's Flags</h2>
	<?php

	lowerborder("header");

	?>	
	<br>
<ul>
	<table width="90%" style="background-color:white" border="0" cellpadding="3" cellspacing="0">
	<col width="35%"></col>
	<col width="65%"></col>
	<tr>
		<th>Flag</th>
		<th>Use</th>
	</tr>
	<tr>
		<td align="left"><tt>--full</tt></td>
		<td align="left">Runs the client window to fullscreen mode.</td>
	</tr>
		<tr>
		<td align="left"><tt>--geometry &lt;width&gt;x&lt;height&gt;</tt></td>
		<td align="left"><font color="red">Obsolete</font><br>
		Sets the client geometry to desired resolution.<br>Default value is set to 1024x768.</td>
	</tr>
	<tr>
		<td align="left"><tt>--design &lt;width&gt;x&lt;height&gt;</tt></td>
		<td align="left">Allows to change the canvas size. Areas outside default geometry area will be darkened and other users won't be able to see objects it contains.<br>
		Default value is set to 1024x768.</td>
	</tr>
	<tr>
		<td align="left"><tt>--nographics</tt></td>
		<td align="left">Starts the client without card images.</td>
	</tr>
	<tr>
		<td align="left"><tt>--nosounds</tt></td>
		<td align="left">Starts the client without sounds.</td>
	</tr>
	<tr>
		<td align="left"><tt>--user &lt;user name&gt;</tt></td>
		<td align="left">Starts the client logging-in as <tt>&lt;user name&gt;</tt>.</td>
	</tr>
	<tr>
		<td align="left"><tt>--server &lt;server name&gt;</tt></td>
		<td align="left">Starts the client using server <tt>&lt;server name&gt;</tt>.</td>
	</tr>
	<tr>
		<td align="left"><tt>--port &lt;port number&gt;</tt></td>
		<td align="left">Starts the client using port <tt>&lt;port name&gt;</tt>.</td>
	</tr>
	<tr>
		<td align="left"><tt>--text</tt></td>
		<td align="left"><font color="red">Terminal only</font><br>
		Runs the client in text mode, allowing copy and paste.</td>
	</tr>
	</table>
</ul>

	<br>
	<br>
	<?php

	upperborder("header");

	?>
	<h2>&nbsp;Debugging & Unusual Flags</h2>
	<?php

	lowerborder("header");

	?>	
	<br>
<ul>
	<table width="90%" style="background-color:white" border="0" cellpadding="3" cellspacing="0">
	<col width="35%"></col>
	<col width="65%"></col>
	<tr>
		<th>Flag</th>
		<th>Use</th>
	</tr>
	<tr>
		<td align="left"><tt>--debug</tt></td>
		<td align="left"><font color="red">Terminal only</font><br>
		Prints "short" debug messages to the terminal.</td>
	</tr>
	<tr>
		<td align="left"><tt>--full-debug</tt></td>
		<td align="left"><font color="red">Terminal only</font><br>
		Prints "long" debug messages to the terminal.</td>
	</tr>
	<tr>
		<td align="left"><tt>--lang-debug</tt></td>
		<td align="left"><font color="red">Terminal only</font><br>
		Dumps all untranslated sentencies met when running non-default language</td>
	</tr>
	<tr>
		<td align="left"><tt>--cache</tt></td>
		<td align="left"><font color="red">Obsolete</font><br>
		Starts the client enabling images cache.<br>
		It is nowadays useless, unless you are running Gccg on very slow computer.</td>
	</tr>
	<tr>
		<td align="left"><tt>--sdl_ttf_ok</tt></td>
		<td align="left"><font color="red">Obsolete</font><br>
		Disables some hacks that prevent SDL crashes due to some fonts.</td>
	</tr>
	<tr>
		<td align="left"><tt>--windows-fonts</tt></td>
		<td align="left"><font color="red">Obsolete</font><br>
		Disables standard free fonts and uses old from Windows.</td>
	</tr>
	</table>
</ul>

<br>
<br>

	<?php

	upperborder("header");

	?>
	<h2>&nbsp;Examples</h2>
	<?php

	lowerborder("header");

	?>	
	<br>

	Suppose you have installed the Metw package and now you want to change some settings for it.<br>
	In windows the default Metw.bat file looks like this:

<ul>
<tt>
@echo off<br>
set HOME=C:<br>
set USER=Windows<br>
set CLIENT=.\ccg_client.exe<br>
if exist .\home set HOME=.\home<br>
if exist module_windows32\ccg_client.exe set CLIENT=module_windows32\ccg_client.exe<br>
start %CLIENT% --user %USER% %1 %2 %3 %4 %5 %6 %7 %8 %9  metw.xml<br>
</tt>
</ul>

	If you want your Metw client to run in fullscreen mode, with no sounds you just need to edit the last line this way:

<ul>
<tt>
start %CLIENT% --user %USER% --full --nosounds %1 %2 %3 %4 %5 %6 %7 %8 %9  metw.xml
</tt>
</ul>
<br>
	If you are running your client from a terminal (i.e. under GNU/Linux, Mac Os X, Cygwin etc...) you may just append the flags to the command line.<br>
	To run Metw client with no sound and 1280x800 design you could use this command:
	
<ul>
<tt>
./Metw --nosounds --design 1280x800
</tt>
</ul>

<br>
<br>



	
<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>	
</p>

</body>
</html>

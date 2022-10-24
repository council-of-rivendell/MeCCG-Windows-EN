<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>

<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Gccg Avatars</h1>
<?php

lowerborder("header");

?>
<br>

<p>
This table lists avatar images currently in Gccg.
To change your avatar image type in Gccg:
<ul>
<tt>
/set avatar &lt;avatar_name&gt;
</tt>
</ul>
where <tt>&lt;avatar_name&gt;</tt> is one of the names in the following table.<br><br>

<table>
<?php
 
AvatarLister(4);

?>
</table>


<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>	
</p>

</body>
</html>
<!-- REMEMBER TO SET CORRECT PATH VARIABLES IN header.php!!!-->

<html>

<link href="../css/default.css" rel="stylesheet" type="text/css">

<body>
<?php

include("header.php");

upperborder("header");

?>
<h1>&nbsp;Screenshots</h1>
<?php

lowerborder("header");

?>
<br>

<p>
<center>
<?php

ThumbMaker("../graphics/screenshots/");

?>
</center>
</p>

<ul></ul>
<br>
<br>
<?php

upperborder("header");

?>
<h1>&nbsp;Older Screenshots</h1>
<?php

lowerborder("header");

?>
<br>
<p>
<center>
<?php

ThumbMaker("../graphics/oldscreenshots/");

?>
</center>
<br><br><br><center><a href="../index.htm" target="_parent"><img src="../graphics/home.png" height="50" width="50"></a></center>

</p>


</body>
</html>
<html>
<body>
<?php

include("counter.php");
?>
<table cellpadding="1" cellspacing="0" style="border:1px solid #000000" width="300px">
	<tr><td> 
			<font face="Arial, Helvetica, sans-serif" size="5">&nbsp;Statistics</font>
	</td></tr>
	<!--<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5"> 
			&raquo; <? echo $online; ?> Online
			</font>
	</td></tr>-->
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5">
			&raquo; <? echo $day; ?> Today
			</font>
	</td></tr>
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5"> 
			&raquo; <? echo $week; ?> Week
			</font>
	</td></tr>
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5"> 
			&raquo; <? echo $month; ?> Month
			</font>
	</td></tr>
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5"> 
			&raquo; <? echo $year; ?> Year
			</font>
	</td></tr>
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5"> 
			&raquo; <? echo $all; ?> Total
			</font>
	</td></tr>
	<tr><td>
			<font face="Arial, Helvetica, sans-serif" size="5">
			&raquo; Record: <? echo $record; ?> (<? echo date("d.m.Y", $record_time) ?>)
			</font>
	</td></tr>
</table>


</body>
</html>
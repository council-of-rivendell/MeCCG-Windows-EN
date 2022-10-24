<?
$expire = 86400;
$filename = "counter.txt";

if (file_exists($filename)) 
{
   $ignore = false;
   $current_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? addslashes(trim($_SERVER['HTTP_USER_AGENT'])) : "no agent";
   $current_time = time();
   $current_ip = $_SERVER['REMOTE_ADDR']; 
      
   $c_file = array();
   $handle = fopen($filename, "r");
   
   if ($handle)
   {
      while (!feof($handle)) 
      {
         $line = trim(fgets($handle)); 
		 if ($line != "")
		    $c_file[] = $line;		  
      }
      fclose ($handle);
   }
   else
      $ignore = true;
   
   // no bots   
   if (substr_count($current_agent, "bot") > 0)
      $ignore = true;
	  
   
   // single ip hit
   for ($i = 1; $i < sizeof($c_file); $i++)
   {
      list($counter_ip, $counter_time) = explode("||", $c_file[$i]);
	  $counter_time = trim($counter_time);
	  
	  if ($counter_ip == $current_ip && $current_time-$expire < $counter_time)
	  {
		 $ignore = true;
		 break;
	  }
   }
   
   if ($ignore == false)
   {
      if (sizeof($c_file) == 0)
      {
		 $add_line1 = date("z") . ":1||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time . "\n";
		 $add_line2 = $current_ip . "||" . $current_time . "\n";
		 
		 $fp = fopen($filename,"w+");
		 if ($fp)
         {
		    flock($fp, LOCK_EX);
			fwrite($fp, $add_line1);
		    fwrite($fp, $add_line2);
			flock($fp, LOCK_UN);
		    fclose($fp);
		 }
		 
		 $day = $week = $month = $year = $all = $record = 1;
		 $record_time = $current_time;
		 $online = 1;
	  }
      else
	  {
		 list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);
		 
		 // day
		 $day_data = explode(":", $day_arr);
		 $day = $day_data[1];
		 if ($day_data[0] == date("z")) $day++; else $day = 1;
		 
		 // week
		 $week_data = explode(":", $week_arr);
		 $week = $week_data[1];
		 if ($week_data[0] == date("W")) $week++; else $week = 1;
		 
		 // month
		 $month_data = explode(":", $month_arr);
		 $month = $month_data[1];
		 if ($month_data[0] == date("n")) $month++; else $month = 1;
		 
		 // year
		 $year_data = explode(":", $year_arr);
		 $year = $year_data[1];
		 if ($year_data[0] == date("Y")) $year++; else $year = 1;
		  
		 // all
		 $all++;
		 
		 $record_time = trim($record_time);
		 if ($day > $record)
		 {
		    $record = $day;
			$record_time = $current_time;
		 }
		 
		 $online = 1;
		 
		 $fp = fopen($filename,"w+");
		 if ($fp)
         {
		    flock($fp, LOCK_EX);
			$add_line1 = date("z") . ":" . $day . "||" . date("W") . ":" . $week . "||" . date("n") . ":" . $month . "||" . date("Y") . ":" . $year . "||" . $all . "||" . $record . "||" . $record_time . "\n";		 
		    fwrite($fp, $add_line1);
		 
		    for ($i = 1; $i < sizeof($c_file); $i++)
            {
               list($counter_ip, $counter_time) = explode("||", $c_file[$i]);
	  
		   	   if ($current_time-$expire < $counter_time)
	           {
	              $counter_time = trim($counter_time);
				  $add_line = $counter_ip . "||" . $counter_time . "\n";
			      fwrite($fp, $add_line);
			      $online++;
	           }
            }
		    $add_line = $current_ip . "||" . $current_time . "\n";
		    fwrite($fp, $add_line);
		    flock($fp, LOCK_UN);
		    fclose($fp);
	     }
	  }
   }
   else
   {
	  if (sizeof($c_file) > 0)
	     list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);
	  else
		 list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", date("z") . ":1||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time);
	  
	  // day
	  $day_data = explode(":", $day_arr);
      $day = $day_data[1];
	  
	  // week
	  $week_data = explode(":", $week_arr);
	  $week = $week_data[1];
	
	  // month
	  $month_data = explode(":", $month_arr);
	  $month = $month_data[1];
	  
	  // year
	  $year_data = explode(":", $year_arr);
	  $year = $year_data[1];
	  
	  $record_time = trim($record_time);
	  
	  $online = sizeof($c_file) - 1;
   }
?>

<!--<table cellpadding="0" cellspacing="0" style="border:1px none #FFFFFF" width="80%">
	<tr> 
		<td style="border-bottom:1px solid #FFFFFF" align="center" colspan="2">
			<font color="white" face="Verdana, Arial, sans-serif" size="2">STATISTICS</font>
		</td>
	</tr>-->
	<!--<tr>
		<td align="left">
			<font color="white" face="Verdana, Arial, sans-serif" size="1"> 
			&nbsp;<? echo $online; ?> ONLINE
			</font>
		</td>
		<td align="right">
			<font color="white" face="Verdana, Arial, sans-serif" size="1">
			<? echo $day; ?> TODAY &nbsp;
			</font>
		</td>
	</tr>-->
	<!--<tr>
		<td align="left">
			<font color="white" face="Verdana, Arial, sans-serif" size="1"> 
			&nbsp; <? echo $week; ?> WEEK
			</font>
		</td>
		<td align="right">
			<font color="white" face="Verdana, Arial, sans-serif" size="1"> 
			<? echo $month; ?> MONTH &nbsp;
			</font>
		</td>
	</tr>
	<tr>
		<td align="left">
			<font color="white" face="Verdana, Arial, sans-serif" size="1"> 
			&nbsp; <? echo $year; ?> YEAR
			</font>
		</td>
		<td align="right">
			<font color="white" face="Verdana, Arial, sans-serif" size="1"> 
			<? echo $all; ?> TOTAL &nbsp;
			</font>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<font color="white" face="Verdana, Arial, sans-serif" size="1">
			&nbsp; <? echo $day; ?> TODAY &nbsp;
			</font>
		</td>
	</tr>
	<tr>
    	<td align="center" colspan="2">
			<font color="white" face="Verdana, Arial, sans-serif" size="1">
			BEST: <? echo $record; ?> (<? echo date("d.m.Y", $record_time) ?>)
			</font>
		</td>
	</tr>
</table>-->

<?
}
?>
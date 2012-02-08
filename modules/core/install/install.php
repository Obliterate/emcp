<?php

 include("config/config.php"); 
 
$con = mysql_connect($host,$uname,$pword);
mysql_close($con);
if (!$con)	{

die('Could not connect: ' . mysql_error());
}
 
 else
	echo '<p>EmCP successfully connecting to the database.</p>' ;
	echo '<p><a href="/modules/core/install">Next</a></p>';
	
 ?>
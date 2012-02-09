<?php

$username = htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

if ($username&&$password) {

mysql_connect('$host','$user','$pass') or die ('Error');
mysql_select_db('$db') or die('Database Error');

$query  =  mysql_query("SELECT * FROM login WHERE user_id='$username'");
$numrows =  mysql_num_rows($query) ;

if ($numrows!=0) {

}
else
	die('No such username');
}

else

die('Please enter a username and password');

?>
<?php

// Check if user input is correct
if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['email'])) {

	$username = htmlentities($_POST['username']);
	$password = htmlentities($_POST['password']);
	$password2 = htmlentities($_POST['password2']);
	$email = htmlentities($_POST['email']);
	
if (!empty($username)&&!empty($password)&&!empty($password2)&&!empty($email)&&($password==$password2)) {

include("config/config.php");
mysql_connect($config[''],$config[1],$config[2]);
}
else 'MySQL Error';
}




?>

<html>
<head>
</head>
<body>

<!-- Form for user input -->
<form action="indehx.php" method="POST">
	Username<br><input type="text" name="username"><br>
	Password<br><input type="password" name="password"><br>
	Repeat Password<br><input type="password" name="password2"><br>
	Email<br><input type="text" name="email"><br>
	Male<input type="radio" name="m"><br>
	Female<input type="radio" name="f">	
	<input type="submit" value="Submit">
</form>

</body>
</html>
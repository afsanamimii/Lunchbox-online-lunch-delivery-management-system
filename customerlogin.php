<?php
session_start();


if(!empty($_COOKIE['id']))
{
	header("refresh:1; url=menucard.php");
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>take input</title>
</head>
<body>
	
		
<form align="center"  height="200px" width="200px" action="customerlogin_destination.php" method="post">
	ID:<input type="text" name="id"><br><br>
	password:<input type="text" name="pass"><br><br>

	
	<input type="checkbox" name="remember" value="1">Remember Me<br><br>
	<input type="submit" value="login" name="login">
	<input type="submit" value="signup" name="login2"><br>
	
</form>





</body>

</html>


<?php
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		// Set Cookie ==> 1 Hour    (name, value, expiration)
		setcookie('username', $username, time()+3600); 

		header('Location: page2.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies Demo by Chris Darnell</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
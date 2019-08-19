<?php
	session_start();

	print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Yet Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Demonstration ==> Sessions</title>
</head>
<body>
<h1>Howdy <?php echo $name; ?></h1>
</body>
</html>
<?php
	session_start();
	// Carry variables from previous session.
	$_SESSION['name'] = 'Chris Darnell';

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Demonstration ==> Sessions</title>
</head>
<body>
<h5>Thanks! <?php echo $name; ?>, You have subscribed, using the email <?php echo $email; ?></h5>
<a href="page3.php">Go to Page 3</a>
</body>
</html>
<?php
	// Set for 1 Day
	// setcookie('username', 'Chris', time() + (86400 * 30));

	// Delete Cookie
	// setcookie('username', 'Chris', time() - 3600);

	// Count Cookie
	if(count($_COOKIE) > 0){
		echo 'There are '.count($_COOKIE). ' cookies saved<br>';
	} else {
		echo 'There are 0 cookies saved<br>';
	}
	
	// Is user set?
	if(isset($_COOKIE['username'])){
		echo 'User '. $_COOKIE['username'] . ' has been set<br>';
	} else {
		echo 'User has not been set';
	}
<?php
	// Use array with cookie
	$user = ['name' => 'Chris', 'email' => 'a@gmail.com', 'age' => 37];

	// Use serialize function to store 
	$user = serialize($user);

	// Pass in serialized user array, set for 1 Day
	setcookie('user', $user, time() + (86400 * 30));

	// Unserialize to read array
	$user =  unserialize($_COOKIE['user']);

	// View all values in array
	print_r($user);
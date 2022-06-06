<?php
	$DATABASE_HOST = 'mysql-server';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = 'secret';
	$DATABASE_NAME = 'photoblog';

	// Try and connect using the info above.
	$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

?>


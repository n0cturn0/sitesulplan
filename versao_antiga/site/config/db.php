<?php
# If necessary, replace the values for the
    # user and password variables
    // $host = 'localhost';
	// $database = 'phpauth';
	// $user = 'root';
	// $pass = '';

	$host = 'localhost';
	$database = 'sulplan_phpauth';
	$user = 'sulplan_site';
	$pass = 'P@rati790!@22';
	// Change character set to utf8
	$mysqli = new mysqli($host, $user, $pass, $database);
	$mysqli -> set_charset("utf8");
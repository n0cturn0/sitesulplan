<?php
# If necessary, replace the values for the
    # user and password variables
 

	$host = 'localhost';
	$database = 'phpauth';
	$user = 'root';
	$pass = '';
	$mysqli = new mysqli($host, $user, $pass, $database);
	$mysqli->set_charset("utf8mb4");
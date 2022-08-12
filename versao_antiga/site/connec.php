<?php
require_once './config/db.php';
$mysqli_connection = new MySQLi($host, $user, $pass, $database);
if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, '');
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

$mysqli = mysqli_connect($host, $user, $pass, 'phpauth');

$meta = $_POST['meta'];

$timestamp = date("Y-m-d H:i:s", time());

$sql = "UPDATE paginas SET texto='$meta' WHERE id=1";


if (mysqli_query($mysqli, $sql)){
   
     header('Location: creditorural.php');
   
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}



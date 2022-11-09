<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

$mysqli = mysqli_connect($host, $user, $pass, $database);

// $temp = explode(".", $_FILES["arquivo"]["name"]);
// $newfilename = round(microtime(true)) . '.' . end($temp);
$meta = $_POST['meta'];

$timestamp = date("Y-m-d H:i:s", time());

$sql = "UPDATE paginas SET texto='$meta' WHERE id=3";


if (mysqli_query($mysqli, $sql)){
   
     header('Location: ambiental.php');
   
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}



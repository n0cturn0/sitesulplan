<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}


$mysqli = mysqli_connect($host, $user, $pass, $database);

$temp = explode(".", $_FILES["arquivo"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);


$timestamp = date("Y-m-d H:i:s", time());
$sql = "INSERT INTO banersecundarios (imagem, created_at ) VALUES ('$newfilename',  '$timestamp')";

if (mysqli_query($mysqli, $sql)){
   if ( move_uploaded_file($_FILES["arquivo"]["tmp_name"], "../../site/banners/" . $newfilename)) {
    header('Location: bannersecundario.php');
   }
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}



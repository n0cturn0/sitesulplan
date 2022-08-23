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

$titulo = $_POST['titulo'];
$textopequeno = $_POST['pequenotexto'];
$timestamp = date("Y-m-d H:i:s", time());
$sql = "INSERT INTO img_banners (imagem, titulo, textopequeno, created_at ) VALUES ('$newfilename', '$titulo', '$textopequeno', '$timestamp')";

if (mysqli_query($mysqli, $sql)){
   if ( move_uploaded_file($_FILES["arquivo"]["tmp_name"], "../../site/images/" . $newfilename)) {
    header('Location: bannerprincipal.php');
   }
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}



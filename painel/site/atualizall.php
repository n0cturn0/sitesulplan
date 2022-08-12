<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, '');
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

$mysqli = mysqli_connect($host, $user, $pass, $database);


echo '<pre>';
print_r($_POST);

foreach ($_POST as $key => $value) {
  
   $titulo      = $_POST['titulo'];
   $texto       = $_POST['pequenotexto'];
   $imimagem    =$_POST['idimagem'];
}



// $timestamp = date("Y-m-d H:i:s", time());

$sql = "UPDATE img_banners SET titulo='$titulo', textopequeno='$texto' WHERE id=$imimagem";


if (mysqli_query($mysqli, $sql)){
   
     header('Location: bannerprincipal.php');
   
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}



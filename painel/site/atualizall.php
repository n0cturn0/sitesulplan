<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}



foreach ($_POST as $key => $value) {
  
   $titulo      = $_POST['titulo'];
   $texto       = $_POST['pequenotexto'];
   $imimagem    =$_POST['idimagem'];
}



// $timestamp = date("Y-m-d H:i:s", time());

$sql = "UPDATE img_banners SET titulo='$titulo', textopequeno='$texto' WHERE id=$imimagem";

$res = $mysqli->query($sql);
if($res !== false ) { 
    header('Location: bannerprincipal.php');
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
 }
// if ($) {
//     header('Location: bannerprincipal.php');
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
// }




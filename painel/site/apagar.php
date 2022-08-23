<?php
require_once '../../vendor/autoload.php';
require_once('./config/db.php');
$mysqli = new mysqli($host, $user, $pass, $database);
$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

$id = $search = htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');
if (!filter_var($id, FILTER_VALIDATE_INT) === false) {
    $phpdatabase = "DELETE FROM img_banners WHERE id=$id";
    if(mysqli_query( $mysqli,$phpdatabase))
    {  
        header('Location: bannerprincipal.php');
    }  
  } else {
    echo("Algo deu errado. ");
  }




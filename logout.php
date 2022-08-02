<?php
require_once './site/config/db.php';
require __DIR__ . '/vendor/autoload.php';

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new \Delight\Auth\Auth($db);

$auth->logOut();
header('Location: site/index.php');

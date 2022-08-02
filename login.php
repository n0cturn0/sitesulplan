<?php 
require __DIR__ . '/vendor/autoload.php';
require_once './site/config/db.php';
$db = new \PDO("mysql:dbname=$database;$host=$host;charset=utf8mb4", $user, $pass);
$auth = new \Delight\Auth\Auth($db);



$email = $_POST['email'];
$password = $_POST['password'];
// $email = 'n0cturn0.debian@gmail.com';
// $password = 'P@rati790';
// $username = 'n0cturn0';
try {
    $auth->login($email, $password);

    header('Location: painel/site/bannerprincipal.php');
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}
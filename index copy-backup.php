<?php
require __DIR__ . '/vendor/autoload.php';

$db = new \PDO('mysql:dbname=phpauth;host=localhost;charset=utf8mb4', 'root', '');


$auth = new \Delight\Auth\Auth($db);
$email = 'tulio@sulplan.com';
$password = 'Sulpl@n2022';
$username = 'Tulio';
try {
    $userId = $auth->register($email, $password, $username, function ($selector, $token) {
        echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
        echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
        echo '  For SMS, consider using a third-party service and a compatible SDK';
    });

    echo 'We have signed up a new user with the ID ' . $userId;
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Invalid email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Invalid password');
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('User already exists');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}


<?php

require_once './site/config/db.php';
try{
    $dbh = new pdo( "mysql:host=$host;dbname=$database",
                    $user,
                    $pass,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
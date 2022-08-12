<?php 

require_once '../vendor/autoload.php';
// use Delight\Auth;
// spl_autoload_register(function(string $nomeCompleteDaClasse){
// $caminhoArquivo = str_replace('Site', 'site', $nomeCompleteDaClasse);
// $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
// $caminhoArquivo .='.php';
// if (file_exists($caminhoArquivo))
// {
//     require_once($caminhoArquivo);
// }
// });


$db = new \PDO('mysql:dbname=phpauth;host=localhost;charset=utf8mb4', 'root', '');
$auth = new \Delight\Auth\Auth($db);
if ($auth->isLoggedIn()) {
    echo 'User is signed in';
}
else {
    echo 'User is not signed in yet';
}
<?php 
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, $pass);
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}

$mysqli = mysqli_connect($host, $user, $pass, $database);

$telefone =$_POST['telefone'];
$endereco = $_POST['endereco'];




$sql = "UPDATE enderecosite SET tele='".$telefone."',   endereco='".$endereco."' WHERE Column1=1";

if ($mysqli->query($sql)==true){
    header('Location: foneendereco.php');
} else {
    echo $mysqli->error;
}
// 
// 
// mysqli_stmt_execute($stmt);

// $sql = "UPDATE tabela_crural SET descricao='$descricao',  SET base_calculo='$calculo', SET preco='$preco', WHERE id=$id";


// if (mysqli_query($mysqli, $sql)){
   
//      header('Location: creditorural.php');
   
// }else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
// }
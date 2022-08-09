<?php 
require_once '../../vendor/autoload.php';
require_once('./config/db.php');

$db = new \PDO("mysql:dbname=$database;host=$host;charset=utf8mb4", $user, '');
$auth = new Delight\Auth\Auth($db);
if (!$auth->isLoggedIn()) {
    header('Location: ../../login.html');
}



$descricao =$_POST['descricao'];
$calculo = $_POST['base_calculo'];
$preco = $_POST['preco'];
$id = $_POST['id'];



$sql = "UPDATE tabela_crural SET descricao='".$descricao."',   base_calculo='".$calculo."', preco='".$preco."' WHERE id=".$id;

if ($mysqli->query($sql)==true){
    header('Location: creditoruraltabela.php');
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
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


//  $sql = 'UPDATE tabela_crural SET descricao=?,  SET base_calculo=?, SET preco=?, WHERE id = ?';
//  $stmt = $mysqli->prepare($sql);
//  $stmt->bind_param("sssi",$descricao, $calculo, $preco, $id );
// $sql = "UPDATE tabela_crural SET descricao=? ,  SET base_calculo=?, SET preco=? WHERE id=?";
// if ($stmt = mysqli_prepare($mysqli,$sql)){
//     mysqli_stmt_bind_param($stmt, 'sssi', $descricao, $calculo, $preco, $id);  
//     mysqli_stmt_execute($stmt);
//     echo "Record Updated:";
//     echo mysqli_affected_rows($mysqli);
// } else {
//     echo mysqli_error($mysqli);
// }

$sql = "UPDATE tabela_crural SET descricao='".$descricao."',   base_calculo='".$calculo."', preco='".$preco."' WHERE id=".$id;

if ($mysqli->query($sql)==true){
    echo 'ok';
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
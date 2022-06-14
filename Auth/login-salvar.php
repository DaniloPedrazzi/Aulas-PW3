<?php
include("../Components/conexao.php");

session_start();

$username = $_POST["username"];
$senha = $_POST["senha"];

$stmt = $pdo->prepare("SELECT COUNT(*) FROM tbuser WHERE userName='$username' and userSenha='$senha'");
$stmt ->execute();
$row = $stmt ->fetch(PDO::FETCH_NUM);

if($row[0]>0){
    $_SESSION['user'] = $username;
    header("location:../Admin/home.php");
}else{
    header("location:../Client/login.php?errodados=true");
}
?>
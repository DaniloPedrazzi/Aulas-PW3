<?php

$username = $_POST["txt_userName"];
$usersenha = $_POST["txt_userSenha"];

echo "Carregando...";


include("../Components/conexao.php");
$stmt = $pdo->prepare("insert into tbuser values(null, '$username', '$usersenha')");
$stmt ->execute();

header("location:../index.php");

?>
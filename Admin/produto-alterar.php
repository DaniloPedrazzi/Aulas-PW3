<?php
include("../Auth/verificar-login.php");

$id = $_GET['id'];
$produto = $_POST["txt_Produto"];
$Valor = $_POST["txt_Valor"];
$Img = $_POST["txt_Img"];

echo "Carregando...";

include("../Components/conexao.php");
$stmt = $pdo->prepare("UPDATE tbproduto SET produto='$produto', valor=$Valor, img='$Img' WHERE idproduto=$id");
$stmt ->execute();

header('location:produto.php');
?>
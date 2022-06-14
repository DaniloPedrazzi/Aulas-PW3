<?php
include("../Auth/verificar-login.php");

$id = $_GET['id'];
$categoria = $_POST["txt_Categoria"];

echo "Carregando...";

include("../Components/conexao.php");
$stmt = $pdo->prepare("UPDATE tbcategoria SET categoria='$categoria' WHERE idCategoria=$id");
$stmt ->execute();

header('location:categoria.php');
?>
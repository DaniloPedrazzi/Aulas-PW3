<?php
include("../Auth/verificar-login.php");

$produto = $_POST["txt_Produto"];
$idCategoria = $_POST["idCategoria"];
$Valor = $_POST["txt_Valor"];
$Img = $_POST["txt_Img"];

echo "Carregando...";


include("../Components/conexao.php");
$stmt = $pdo->prepare("insert into tbproduto values(null, '$produto', $idCategoria, $Valor, '$Img')");
$stmt ->execute();

header("location:produto.php");

?>
<?php
include("../Auth/verificar-login.php");

$Categoria = $_POST["txt_Categoria"];

echo "Carregando...";


include("../Components/conexao.php");
$stmt = $pdo->prepare("insert into tbCategoria values(null, '$Categoria')");
$stmt ->execute();

header("location:categoria.php");

?>
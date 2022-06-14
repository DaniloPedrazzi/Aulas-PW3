<?php
    include("../Auth/verificar-login.php");
    
    $id = $_GET['id'];

    include("../Components/conexao.php");
    $stmt = $pdo->prepare("delete from tbProduto where idProduto='$id'");	
	$stmt ->execute();

    header("location:produto.php");
?>
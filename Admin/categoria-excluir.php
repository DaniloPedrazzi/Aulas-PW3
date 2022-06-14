<?php
    include("../Auth/verificar-login.php");
    
    $id = $_GET['id'];

    include("../Components/conexao.php");
    $stmt = $pdo->prepare("delete from tbCategoria where idCategoria='$id'");	
	$stmt ->execute();

    header("location:categoria.php");
?>
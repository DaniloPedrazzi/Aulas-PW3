<?php
    include("../Auth/verificar-login.php");
    include("../Components/conexao.php");

    $stmt = $pdo->prepare("select * from tbcategoria");
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;        					
    }	

    echo json_encode($data);
?>
<?php 
	include("Components/cabecalho.php");
	include("Components/menu-index.php");
	include("Components/conexao.php");
?>

<?php
		$stmt = $pdo->prepare("select * from tbProduto");
		$stmt->execute();
?>

<?php
while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
	echo "<div style='
	display: inline-block;
	max-width: 220px;
	margin: 25px;
	min-height: 250px;
	border: 2px solid white;
	padding: 30px;
	border-radius: 10px;'>
			<center>
				<h1>$row[1]</h1>
				<img style='
				width: 200px;
				height: 200px;
				margin-top: 5px;
				margin-bottom: 5px;'
				src='$row[4]'>
				<a style='
				font-weight: bold;
				color: #1c1c1c;
				text-decoration: none;
				background-color: #53c300;
				border-radius: 5px;
				padding: 8px 15px;
				transition-duration: 0.2s;'
				href='#'>Comprar - R$$row[3]</a>
			</center>
		</div>";
}	
?>
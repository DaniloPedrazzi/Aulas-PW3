<?php 
	include("../Components/cabecalho.php");
	include("../Components/menu.php");
	include("../Components/conexao.php");
	include("../Auth/verificar-login.php");
?>

<center>
<h1 style="font-size: 30px; margin: 18px">Categorias</h1>
<section>
	<?php
		if(@$_GET['id']){
			$id = $_GET['id'];
			$action="categoria-alterar.php?id=$id";
		}else{
			$action="categoria-salvar.php";
		}
	?>

	<form action="<?php echo $action?>" method="post">
		<div>
			<input type="text" placeholder="Categoria" name="txt_Categoria" value="<?php echo @$_GET['categoria'];?>">
		</div>
			<input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
	</form>
</section>

<section>	
	<?php
		$stmt = $pdo->prepare("select * from tbcategoria");	
		$stmt ->execute();
	?>

	<table border="1">
		<thead>
			
			<th style='color:white;'> idCategoria </th>
			<th style='color:white;'> Categoria </th>
		</thead>
		<tbody>
			<?php
				while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
					echo "<tr>";				
						echo "<td style='color:white;'>".utf8_encode($row[0])."</td>";
						echo "<td style='color:white;'>".utf8_encode($row[1])."</td>";
						echo "<td style='color:white;'>";
							echo "<a href='categoria-excluir.php?id=$row[0]' style='text-decoration: none; color: red;'>Excluir</a>";								
						echo "</td>";			
						echo "<td style='color:white;'>";
							echo "<a href='categoria.php?id=$row[0]&categoria=$row[1]' style='text-decoration: none; color: yellow;'>Alterar</a>";								
						echo "</td>";			
					echo "</tr>";				
				}	
			?>	
		</tbody>		
	</table>
	<a style="color:white" href="categorias-json.php">Exibir em JSON</a>
</section>
</center>
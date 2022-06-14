<?php 
	include("../Components/cabecalho.php");
	include("../Components/menu.php");
	include("../Components/conexao.php");
	include("../Auth/verificar-login.php");
?>
<center>
<section>
    <h1 style="font-size: 30px; margin: 18px">Produtos</h1>

	<?php
			if(@$_GET['id']){
				$id = $_GET['id'];
				$action="produto-alterar.php?id=$id";
			}else{
				$action="produto-salvar.php";
			}
	?>

	<form action="<?php echo $action?>" method="post">
		<div>
			<input type="text" placeholder="Produto" name="txt_Produto" value="<?php echo @$_GET['produto'];?>">
			<input type="text" placeholder="idCategoria" name="idCategoria" value="<?php echo @$_GET['categoria'];?>">
		</div>
		<div>
			<input type="text" placeholder="Valor" name="txt_Valor" value="<?php echo @$_GET['valor'];?>">
			<input type="text" placeholder="Imagem" name="txt_Img" value="<?php echo @$_GET['imagem'];?>">
		</div>
			<input style="margin-bottom: 30px; margin-top: 15px" type="submit" value="Salvar">
	</form>
</section>

<section>
	<?php
		$stmt = $pdo->prepare("select * from tbProduto");	
		$stmt ->execute();
	?>
	<table border="1">
		<thead>
			<th style='color:white;'> Id </th>
			<th style='color:white;'> Produto </th>
			<th style='color:white;'> Categoria </th>
			<th style='color:white;'> Valor </th>
			<th style='color:white;'> Imagem </th>
		</thead>
		<tbody>
			<?php
				while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
					echo "<tr>";				
					
						echo "<td style='color:white;'>$row[0]</td>";
						echo "<td style='color:white;'>$row[1]</td>";
						echo "<td style='color:white;'>$row[2]</td>";
						echo "<td style='color:white;'>$row[3]</td>";
						echo "<td style='color:white;'>$row[4]</td>";
						echo "<td style='color:white;'>";
							echo "<a href='produto-excluir.php?id=$row[0]' style='text-decoration: none; color: red;'>Excluir</a>";								
						echo "</td>";
						echo "<td style='color:white;'>";
							echo "<a href='produto.php?id=$row[0]&produto=$row[1]&categoria=$row[2]&valor=$row[3]&imagem=$row[4]' style='text-decoration: none; color: yellow;'>Alterar</a>";			
						echo "</td>";
					echo "</tr>";				
				}
			?>	
		</tbody>		
	</table>	
</section>

</center>
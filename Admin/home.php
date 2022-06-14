<?php include("../Components/cabecalho.php");  ?>
<?php include("../Components/menu.php");  ?>
<?php include("../Components/conexao.php"); ?>
<?php include("../Auth/verificar-login.php"); ?>

<section>
	<center>
		<h1 style="margin-bottom: 1.5rem">Estatísticas da empresa</h1>

		<?php
		$stmt = $pdo->prepare("select count(*) from tbProduto");
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_NUM);
		echo "<p style='color: white'> Total de produtos: $row[0]</p> <br>";
		$stmtCat = $pdo->prepare("select count(*) from tbCategoria");
		$stmtCat->execute();
		$rowCat = $stmtCat->fetch(PDO::FETCH_NUM);
		?>

		<?php
		$stmt2 = $pdo->prepare("select sum(valor) from tbProduto");
		$stmt2->execute();
		$row2 = $stmt2->fetch(PDO::FETCH_NUM);
		echo "<p style='color: white'> Soma dos valores dos produtos: $row2[0]</p> <br>";
		?>

		<?php
		$stmt3 = $pdo->prepare("select avg(valor) from tbProduto");
		$stmt3->execute();
		$row3 = $stmt3->fetch(PDO::FETCH_NUM);
		echo "<p style='color: white'> Média dos valores dos produtos: $row3[0]</p> <br>";
		?>

		<?php
		$stmt4 = $pdo->prepare("select max(valor) from tbProduto");
		$stmt4->execute();
		$row4 = $stmt4->fetch(PDO::FETCH_NUM);
		echo "<p style='color: white'> Valor do produto mais caro: $row4[0]</p> <br>";
		?>

		<?php
		$stmt5 = $pdo->prepare("select min(valor) from tbProduto");
		$stmt5->execute();
		$row5 = $stmt5->fetch(PDO::FETCH_NUM);
		echo "<p style='color: white'> Valor do produto mais barato: $row5[0]</p>";
		?>
	</center>


</section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages': ['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');
		data.addRows([
			['Produtos', <?php echo $row[0]; ?>],
			['Categorias', <?php echo $rowCat[0]; ?>]
		]);
		var options = {
			'title': 'Quantidade de produtos e categorias',
			'width': 800,
			'height': 500,
			'backgroundColor': '#1c1c1c',
			'legend': {textStyle: {color: 'white'}},
			'titleTextStyle': {color: 'white'},
			'tooltip.textStyle': {color: 'white'}
		};
		var chart = new google.visualization.PieChart(document.getElementById('chart_qtd'));
		chart.draw(data, options);
	}
</script>

<script type="text/javascript">
	let satsfaction_3 = 15;
	let satsfaction_2 = 7;
	let satsfaction_1 = 4;
	let satsfaction_0 = 2;

	google.charts.load('current', {'packages': ['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');
		data.addRows([
			['Muito Satisfeitos', satsfaction_3],
			['Satisfeitos', satsfaction_2],
			['Pouco Satisfeitos', satsfaction_1],
			['Insatisfeitos', satsfaction_0]
		]);
		var options = {
			'title': 'Satisfação de nossos clientes',
			'width': 800,
			'height': 500,
			'backgroundColor': '#1c1c1c',
			'legend': {textStyle: {color: 'white'}},
			'titleTextStyle': {color: 'white'},
			'tooltip.textStyle': {color: 'white'}
		};
		var chart = new google.visualization.PieChart(document.getElementById('chart_sats'));
		chart.draw(data, options);
	}
</script>

<section>
	<div style="margin-top:2rem;" id="chart_qtd"></div>
	<div style="margin-top:-31.5rem; float:right;" id="chart_sats"></div>
</section>
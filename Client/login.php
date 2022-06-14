<?php 
	include("../Components/cabecalho.php");
	include("../Components/conexao.php");
	include("../Components/menu-cliente.php");
?>

<?php
if(isset($_GET['erro'])){
	$erro = 'Faça login para acessar';
}
if(isset($_GET['errodados'])){
	$errodados = 'Dados inválidos';
}
?>

<div style="color: red; background-color:yellow">
	<?php 
		echo $erro ?? '';
		echo $errodados ?? '';
		echo "<h1> Login </h1>";
	?>
</div>

<section>
	<form action="../Auth/login-salvar.php" method="post">
		<div>
			<input type="text" placeholder="Usuário" name="username">
		</div>
		<div>
			<input type="text" placeholder="Senha" name="senha">
		</div>
		<div>
			<input type="submit" value="Login">
		</div>
		<div>
			<a class="cadastro" href="cadastro.php">Cadastro</a>
		</div>
	</form>
</section>
<?php 
	include("../Components/cabecalho.php");
	include("../Components/conexao.php");
	include("../Components/menu-cliente.php");

	echo "<h1> Cadastro </h1>";
?>

<section>
	<form action="../Auth/cadastro-salvar.php" method="post">
		<div>
			<input type="text" placeholder="Usuário" name="txt_userName">
		</div>
		<div>
			<input type="text" placeholder="Senha" name="txt_userSenha">
		</div>
		<div>
			<input type="submit" value="Salvar">
		</div>
	</form>
</section>
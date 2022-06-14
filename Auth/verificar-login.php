<?php
session_start();

if(!isset($_SESSION['user'])){
	header('Location: ../Client/login.php?erro=true');
	exit;
}
?>
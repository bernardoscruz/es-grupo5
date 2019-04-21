<?php include("includes/connect.php");
include("includes/functions.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($connect, $login, $senha);
if($usuario == null) {
	echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../login.php';</script>";
} else {
    header("Location: listaImoveis.php");
}
die();
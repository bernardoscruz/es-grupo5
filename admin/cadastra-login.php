<?php include("includes/connect.php");
include("includes/functions.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$usuario = buscaLogin($connect, $login);
if($login != $usuario['login'] && cadastraUsuario($connect, $login, $senha)) {
  header("Location: loginCadastro.php?cadastrado=1");
}
else {
  header("Location: loginCadastro.php?cadastrado=0");
}
?>
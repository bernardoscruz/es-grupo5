<?php include("../../includes/connect.php");
include("../../includes/functions.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$categoria = $_POST['categoria'];

$usuario = buscaLogin($connect, $email);
if($email != $usuario['email'] && cadastraUsuario($connect, $nome, $email, $senha, $categoria, $_POST['cidade'], $_POST['estado'])) {
  header("Location: ../../views/usuarios/lista-usuarios.php?cadastrado=1");
}
else {
  header("Location: ../../views/usuarios/cadastro-usuario.php?cadastrado=0");
}



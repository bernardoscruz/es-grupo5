<?php include("admin/includes/connect.php");
include("admin/includes/functions.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$categoria = $_POST['categoria'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cnpj = $_POST['cnpj'];
$usuario = buscaLogin($connect, $email);
if($email != $usuario['email'] && cadastraUsuario($connect, $nome, $email, $senha, $categoria, $cidade, $estado) && cadastraCliente($connect, $email, $cnpj)) {
    header("Location: home.php?cadastrado=1");
}
else {
    header("Location: registrar-cliente.php?cadastrado=0");
}
?>
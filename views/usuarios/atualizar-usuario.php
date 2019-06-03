<?php include("../../includes/connect.php");
include("../../includes/functions.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$categoria = $_POST['categoria'];
$createdAt = $_POST['created_at'];
$updatedAt = $_POST['updated_at'];

if(alterarUsuario($connect, $id, $nome, $email, $categoria, $createdAt, $updatedAt)) { 
	header("Location: lista-usuarios.php?alterado=true");
}
else {
	header("Location: alterar-usuario.php?erro=true");
}
die();
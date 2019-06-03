<?php include("includes/connect.php");
include("includes/functions.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cnpj = $_POST['cnpj'];
$createdAt = $_POST['created_at'];
$updatedAt = $_POST['updated_at'];

if(alterarCliente($connect, $id, $nome, $email, $cidade, $estado, $cnpj, $createdAt, $updatedAt)) {
    header("Location: lista-clientes.php?alterado=true");
}
else {
    header("Location: alterar-cliente.php?erro=true");
}
die();
<?php

include("../../includes/connect.php");
include("../../includes/functions.php");

$usuario = buscaLogin($connect, $email);
if($_POST['email'] != $usuario['email'] && cadastraUsuario($connect, $_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['categoria'], $_POST['cidade'], $_POST['estado'])) {
    $usuarioId = mysqli_insert_id($connect);
    mysqli_query($connect, "INSERT INTO clientes (cnpj, usuario_id) values ('{$_POST['cnpj']}', '{$usuarioId}')");
    session_start();
    $_SESSION['islogged'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['categoria'] = $usuario['categoria'];
    header("Location: ../../views/home.php?cadastrado=1");
}
else {
    header("Location: ../../views/registrar-cliente.php?cadastrado=0");
}

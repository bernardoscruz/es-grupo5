<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 23:42
 */

include("../../includes/connect.php");
include("../../includes/functions.php");

/**
 * Cadastra um cliente se o email for válido
 * @param $connect
 */
function cadastraCliente($connect)
{
    $usuario = buscaLogin($connect, $_POST['email']);
    if ($_POST['email'] != $usuario['email']) {
        $senhaMd5 = md5($_POST['senha']);
        $query = "insert into usuarios (nome, email, senha, categoria, cidade, estado) values ('{$_POST['nome']}','{$_POST['email']}', '{$senhaMd5}','{$_POST['categoria']}', '{$_POST['cidade']}', '{$_POST['estado']}')";
        $result = mysqli_query($connect, $query);
        $usuarioId = mysqli_insert_id($connect);
        mysqli_query($connect, "INSERT INTO clientes (cnpj, usuario_id) values ('{$_POST['cnpj']}', '{$usuarioId}')");
        if ($result)
            header("Location: ../../views/clientes/lista-clientes.php?cadastrado=1");
        else
            header("Location: ../../views/clientes/cadastrar-cliente.php?cadastrado=0");

    } else {
        header("Location: ../../views/clientes/cadastrar-cliente.php?cadastrado=0");
    }

}
cadastraCliente($connect);


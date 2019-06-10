<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 09/06/2019
 * Time: 14:46
 */

include("../../includes/connect.php");
include("../../includes/functions.php");


/**
 * Cadastra um funcionario se o email for válido
 * @param $connect
 */
function cadastraFuncionario($connect)
{
    $funcionario = mysqli_fetch_assoc(mysqli_query($connect,"SELECT email from usuarios where email = '{$_POST['email']}'"));
    if ($_POST['email'] != $funcionario['email']) {
        $senhaMd5 = md5($_POST['senha']);
        $query = "insert into usuarios (nome, email, senha, categoria, cidade, estado) values ('{$_POST['nome']}','{$_POST['email']}', '{$senhaMd5}','{$_POST['categoria']}', '{$_POST['cidade']}', '{$_POST['estado']}')";
        $result = mysqli_query($connect, $query);
        $usuarioId = mysqli_insert_id($connect);
        mysqli_query($connect, "INSERT INTO funcionarios (cpf, usuario_id, salario, cargo, numero_identificacao) 
                                      values ('{$_POST['cpf']}', '{$usuarioId}', '{$_POST['salario']}', '{$_POST['cargo']}', '{$_POST['numero_identificacao']}')");
        if ($result)
            header("Location: ../../views/funcionarios/lista-funcionarios.php?cadastrado=1");
        else
            header("Location: ../../views/funcionarios/cadastrar-funcionario.php?cadastrado=0");

    } else {
        header("Location: ../../views/funcionarios/cadastrar-funcionario.php?cadastrado=0");
    }

}
cadastraFuncionario($connect);
<?php

include "../../includes/connect.php";

/**
 * Exclui um funcionário dado um id
 * @param $connect
 */
function excluirFuncionario($connect)
{
    $query = "DELETE FROM funcionarios WHERE id = '{$_POST['id']}'";
    mysqli_query($connect, "DELETE FROM usuarios WHERE id = '{$_POST['usuario_id']}'");
    if (mysqli_query($connect, $query))
        header("Location: ../../views/funcionarios/lista-funcionarios.php?excluido=1");
    else
        header("Location: ../../views/funcionarios/excluir-funcionario.php?erro=1&id=".$_POST['id']);
}

excluirFuncionario($connect);
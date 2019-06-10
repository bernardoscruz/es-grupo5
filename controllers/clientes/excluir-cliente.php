<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 22:38
 */

include "../../includes/connect.php";

/**
 * Exclui um cliente dado um id
 * @param $connect
 */
function excluirCliente($connect)
{
    $query = "DELETE FROM clientes WHERE id = '{$_POST['id']}'";
    mysqli_query($connect, "DELETE FROM usuarios WHERE id = '{$_POST['usuario_id']}'");
    if (mysqli_query($connect, $query))
        header("Location: ../../views/clientes/lista-clientes.php?excluido=1");
    else
        header("Location: ../../views/clientes/excluir-cliente.php?erro=1&id=".$_POST['id']);
}

excluirCliente($connect);
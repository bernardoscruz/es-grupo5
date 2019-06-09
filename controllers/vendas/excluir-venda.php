<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:12
 */

include "../../includes/connect.php";

/**
 * Exclui uma venda dado um id
 * @param $connect
 */
function excluirVenda($connect)
{
    $query = "DELETE FROM vendas WHERE id = '{$_POST['id']}'";
    if (mysqli_query($connect, $query))
        header("Location: ../../views/vendas/lista-vendas.php?excluido=1");
    else
        header("Location: ../../views/vendas/excluir-venda.php?erro=1&id=".$_POST['id']);
}

excluirVenda($connect);
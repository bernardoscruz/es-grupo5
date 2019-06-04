<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 15:55
 */

include "../../includes/connect.php";

/**
 * Exclui um produto dado um id
 * @param $connect
 */
function excluirProduto($connect)
{
    $query = "DELETE FROM produtos WHERE id = '{$_POST['id']}'";
    if (mysqli_query($connect, $query))
        header("Location: ../../views/produtos/lista-produtos.php?excluido=1");
    else
        header("Location: ../../views/produtos/excluir-produto.php?erro=1&id=".$_POST['id']);
}

excluirProduto($connect);
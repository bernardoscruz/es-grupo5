<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 15:26
 */

include ("../../includes/connect.php");
/**
 * Altera um produto dado um id
 * @param $connect
 */
function alterarProduto($connect)
{
    $query = "update produtos set nome = '{$_POST['nome']}', 
                                 preco = '{$_POST['preco']}', 
                                 fabricante = '{$_POST['fabricante']}',
                                 desconto = '{$_POST['desconto']}',
                                 quantidade = '{$_POST['quantidade']}',
                                 setor_id = '{$_POST['setor_id']}'
                                 where id = '{$_POST['id']}'";
    if(mysqli_query($connect, $query))
        header("Location: ../../views/produtos/lista-produtos.php?alterado=1");
    else
        header("Location: ../../views/produtos/alterar-produto.php?erro=1&id=".$_POST['id']);
}
alterarProduto($connect);
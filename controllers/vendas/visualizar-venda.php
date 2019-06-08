<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:12
 */

include("../../includes/connect.php");

/**
 * Retorna uma venda dado um id
 * @param $connect
 * @param $id
 * @return array|null
 */
function visualizarVenda($connect, $id)
{
    $query = "SELECT *
              FROM vendas  
              WHERE id = '{$id}'";

     $venda = mysqli_fetch_assoc(mysqli_query($connect, $query));
     return $venda;
}

/**
 * Retorna todos os ids dos produtos de uma venda
 * @param $connect
 * @param $id
 * @return array
 */
function getProdutosIds($connect, $id)
{
    $produtosIds = array();
    $result = mysqli_query($connect, "select produto_id, quantidade from venda_produto where venda_id = '{$id}'");
    while ($produtoId = mysqli_fetch_assoc($result)) {
        array_push($produtosIds, $produtoId);
    }
    return $produtosIds;
}

/**
 * Retorna produtos de acordo com os ids passados
 * @param $connect
 * @param $produtosIds
 * @return array
 */
function getProdutos($connect, $produtosIds)
{
    $produtos = array();
    foreach ($produtosIds as $produtoId) {
        array_push($produtos, mysqli_fetch_assoc(mysqli_query($connect, "SELECT id, nome, preco from produtos WHERE id = '{$produtoId['produto_id']}'")));
    }
    return $produtos;
}
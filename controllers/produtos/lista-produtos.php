<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 14:23
 */

/**
 * @param $connect
 * @param $sort
 * @return array
 */
function listaProdutos($connect, $sort) {
    $produtos = array();
    $query = "SELECT *, produtos.nome as produto_nome, produtos.id as produto_id FROM produtos INNER JOIN setores ON produtos.setor_id = setores.id";
    if($sort)
        $query = $query.$sort;
    $result = mysqli_query($connect, $query);

    while($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}
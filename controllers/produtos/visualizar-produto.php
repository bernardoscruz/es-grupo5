<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 15:14
 */

/**
 * Retorna um produto dado um id
 * @param $connect
 * @param $id
 * @return array
 */
function visualizarProduto($connect, $id)
{
    $produto = mysqli_query($connect, "SELECT *, produtos.nome as produto_nome, produtos.id as produto_id FROM produtos INNER JOIN setores ON produtos.setor_id = setores.id WHERE produtos.id = '{$id}'");
    return mysqli_fetch_assoc($produto);
}
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
    $produto = mysqli_query($connect, "SELECT * FROM produtos WHERE ID = '{$id}'");
    return mysqli_fetch_assoc($produto);
}
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
    $query = "select * from produtos";
    if($sort)
        $query = $query.$sort;
    $result = mysqli_query($connect, $query);

    while($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}
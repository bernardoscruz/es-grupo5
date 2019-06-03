<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 03/06/2019
 * Time: 17:20
 */

/**
 * @param $connect
 * @param $sort
 * @return array
 */

function listaSetores($connect, $sort) {
    $setores = array();
    $query = "select * from setores";
    if($sort)
        $query = $query.$sort;
    $result = mysqli_query($connect, $query);

    while($setor = mysqli_fetch_assoc($result)) {
        array_push($setores, $setor);
    }
    return $setores;
}

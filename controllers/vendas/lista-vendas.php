<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:12
 */

/**
 * Retorna todas as vendas feitas
 * @param $connect
 * @param $sort
 * @return array
 */
function listaVendas($connect, $sort) {
    $vendas = array();
    $query = "SELECT *, 
              vendas.id  as venda_id, 
              clientes.usuario_id as cliente_usuario_id, 
              funcionarios.usuario_id as funcionario_usuario_id
              FROM vendas 
              INNER JOIN clientes ON vendas.cliente_id = clientes.id
              INNER JOIN funcionarios ON vendas.funcionario_id = funcionarios.id";
    if($sort)
        $query = $query.$sort;
    $result = mysqli_query($connect, $query);

    while($venda = mysqli_fetch_assoc($result)) {
        array_push($vendas, $venda);
    }
    return $vendas;
}
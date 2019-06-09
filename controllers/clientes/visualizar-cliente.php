<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 23:11
 */

include("../../includes/connect.php");

/**
 * Retorna um cliente dado um id
 * @param $connect
 * @param $id
 * @return array|null
 */
function visualizarCliente($connect, $id)
{
    $query = "SELECT *, clientes.id as cliente_id FROM clientes INNER JOIN usuarios on clientes.usuario_id = usuarios.id WHERE clientes.id = '{$id}'";
    return mysqli_fetch_assoc(mysqli_query($connect, $query));
}

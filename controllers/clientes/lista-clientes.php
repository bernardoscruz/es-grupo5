<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 22:23
 */

include ("../../includes/connect.php");

/**
 * Retorna todos os clientes registrados
 * @param $connect
 * @param $sort
 * @return array
 */
function listaClientes($connect, $sort)
{
    $clientes = array();
    $query = "SELECT *, clientes.id as cliente_id FROM clientes INNER JOIN usuarios on clientes.usuario_id = usuarios.id";
    $result = mysqli_query($connect, $query.$sort );

    while($cliente = mysqli_fetch_assoc($result)) {
        array_push($clientes, $cliente);
    }
    return $clientes;
}
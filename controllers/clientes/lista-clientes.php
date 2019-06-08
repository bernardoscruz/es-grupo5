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
 * @return array
 */
function listaClientes($connect)
{
    $clientes = array();
    $result = mysqli_query($connect, "SELECT *, clientes.id as cliente_id FROM clientes INNER JOIN usuarios on clientes.usuario_id = usuarios.id");

    while($cliente = mysqli_fetch_assoc($result)) {
        array_push($clientes, $cliente);
    }
    return $clientes;
}
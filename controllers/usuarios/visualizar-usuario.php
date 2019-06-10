<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 09/06/2019
 * Time: 22:23
 */

include("../../includes/connect.php");

/**
 * Retorna um usuário
 * @param $connect
 * @param $id
 * @return array|null
 */
function visualizarUsuario($connect, $id)
{
    $result = mysqli_query($connect, "select * from usuarios where id = '{$id}'");
    return mysqli_fetch_assoc($result);
}
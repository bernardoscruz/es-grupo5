<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 09/06/2019
 * Time: 22:22
 */

include("../../includes/connect.php");

/**
 * Retorna todos os usuários do sistema
 * @param $connect
 * @return array
 */
function listaUsuarios($connect) {
    $usuarios = array();
    $result = mysqli_query($connect, "select * from usuarios order by nome asc");
    while($usuario = mysqli_fetch_assoc($result)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}
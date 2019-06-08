<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 22:31
 */

include ("../../includes/connect.php");

/**
 * Retorna todos os funcionários registrados
 * @param $connect
 * @return array
 */
function listaFuncionarios($connect)
{
    $funcionarios = array();
    $result = mysqli_query($connect, "SELECT *, funcionarios.id as funcionario_id FROM funcionarios INNER JOIN usuarios on funcionarios.usuario_id = usuarios.id");

    while($funcionario = mysqli_fetch_assoc($result)) {
        array_push($funcionarios, $funcionario);
    }
    return $funcionarios;
}
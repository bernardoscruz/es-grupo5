<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 09/06/2019
 * Time: 14:45
 */

/**
 * Retorna um funcionario dado um id
 * @param $connect
 * @param $id
 * @return array|null
 */
function visualizarFuncionario($connect, $id)
{
    $query = "SELECT *, funcionarios.id as funcionario_id FROM funcionarios INNER JOIN usuarios on funcionarios.usuario_id = usuarios.id WHERE funcionarios.id = '{$id}'";
    return mysqli_fetch_assoc(mysqli_query($connect, $query));
}
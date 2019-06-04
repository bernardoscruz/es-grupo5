<?php
/**
 * Created by PhpStorm.
 * User: Lucas Piazzi
 * Date: 04/06/2019
 * Time: 11:05
 */

/**
 * Retorna um setor dado um id
 * @param $connect
 * @param $id
 * @return array
 */
function visualizarSetor($connect, $id)
{
   $setor = mysqli_query($connect, "SELECT * FROM SETORES WHERE ID = '{$id}'");
   return mysqli_fetch_assoc($setor);
}
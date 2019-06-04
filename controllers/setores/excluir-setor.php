<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 12:15
 */

include "../../includes/connect.php";

/**
 * Exclui um setor dado um id
 * @param $connect
 */
function excluirSetor($connect)
{
    $query = "DELETE FROM setores WHERE id = '{$_POST['id']}'";
    //mysqli_query($connect, "DELETE FROM produtos WHERE setor_id = '{$_POST['id'}'");
    if (mysqli_query($connect, $query))
        header("Location: ../../views/setores/lista-setores.php?excluido=1");
    else
        header("Location: ../../views/setores/excluir-setor.php?erro=1&id=".$_POST['id']);
}

excluirSetor($connect);
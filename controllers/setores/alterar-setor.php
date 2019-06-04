<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 11:23
 */
include ("../../includes/connect.php");
/**
 * @param $connect
 */
function alterarSetor($connect)
{
    $query = "update setores set nome = '{$_POST['nome']}', 
                                 administrador_responsavel = '{$_POST['administrador_responsavel']}', 
                                 numero_identificacao = '{$_POST['numero_identificacao']}' 
                                 where id = '{$_POST['id']}'";
    if(mysqli_query($connect, $query))
        header("Location: ../../views/setores/lista-setores.php?alterado=1");
    else
        header("Location: ../../views/setores/alterar-setor.php?erro=1&id=".$_POST['id']);
}
alterarSetor($connect);
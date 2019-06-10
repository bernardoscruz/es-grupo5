<?php
include "../../includes/connect.php";

/**
 * Exclui um usuário dado um id
 * @param $connect
 */
function excluirUsuario($connect)
{
    $query = "DELETE FROM usuarios WHERE id = '{$_POST['id']}'";

    if (mysqli_query($connect, $query))
        header("Location: ../../views/usuarios/lista-usuarios.php?excluido=1");
    else
        header("Location: ../../views/usuarios/excluir-usuario.php?erro=1&id=".$_POST['id']);
}

excluirUsuario($connect);
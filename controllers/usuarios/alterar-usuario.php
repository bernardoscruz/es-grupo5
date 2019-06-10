<?php

include("../../includes/connect.php");

/**
 * Altera um usuário dado um id
 * @param $connect
 */
function alterarUsuario($connect)
{
    $query = "update usuarios set nome = '{$_POST['nome']}', email = '{$_POST['email']}', categoria = '{$_POST['categoria']}', cidade = '{$_POST['cidade']}', estado = '{$_POST['estado']}' where id = '{$_POST['id']}'";
    $result = mysqli_query($connect, $query);
    if($result) {
        header("Location: ../../views/usuarios/lista-usuarios.php?alterado=true");
    }
    else {
        header("Location: ../../views/usuarios/alterar-usuario.php?erro=true");
    }
    die();
}

alterarUsuario($connect);

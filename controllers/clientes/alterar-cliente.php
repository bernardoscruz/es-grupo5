<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 22:38
 */

/**
 * Altera um cliente dado um id
 * @param $connect
 * @param $id
 */
function alterarCliente($connect, $id)
{
    mysqli_query($connect, "UPDATE clientes SET cnpj = '{$_POST['cnpj']}' WHERE id = '{$id}'");
    if(mysqli_query($connect, "UPDATE usuarios SET cnpj = '{$_POST['cnpj']}', nome = '{$_POST['nome']}', email = '{$_POST['email']}', cidade = '{$_POST['cidade']}', estado = '{$_POST['estado']}' WHERE id = '{$_POST['usuario_id']}'"))
        header("Location: lista-clientes.php?alterado=true");
    else
        header("Location: alterar-cliente.php?erro=true");

}
alterarCliente($connect, $_POST['id']);


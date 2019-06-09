<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 22:38
 */

include("../../includes/connect.php");

var_dump($_POST);
/**
 * Altera um cliente dado um id
 * @param $connect
 * @param $id
 */
function alterarCliente($connect, $id)
{
    mysqli_query($connect, "UPDATE clientes SET cnpj = '{$_POST['cnpj']}' WHERE id = '{$id}'");

    $result = mysqli_query($connect, "UPDATE funcionarios SET  
                                            nome = '{$_POST['nome']}', 
                                            email = '{$_POST['email']}', 
                                            cidade = '{$_POST['cidade']}', 
                                            estado = '{$_POST['estado']}' 
                                            WHERE id = '{$_POST['usuario_id']}'");

    if($result)
        header("Location: ../../views/clientes/lista-clientes.php?alterado=true");
    else
        header("Location: ../../views/clientes/alterar-cliente.php?erro=true&id={$id}");

}
alterarCliente($connect, $_POST['id']);


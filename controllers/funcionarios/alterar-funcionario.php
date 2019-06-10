<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 09/06/2019
 * Time: 14:46
 */

include("../../includes/connect.php");

/**
 * Altera um funcionário dado um id
 * @param $connect
 * @param $id
 */
function alterarFuncionario($connect, $id)
{
    mysqli_query($connect, "UPDATE funcionarios SET cpf = '{$_POST['cpf']}',
                                                          salario = '{$_POST['salario']}',
                                                          cargo = '{$_POST['cargo']}',
                                                          numero_identificacao = '{$_POST['numero_identificacao']}'
                                                          WHERE id = '{$id}'");

    $result = mysqli_query($connect, "UPDATE usuarios SET  
                                            nome = '{$_POST['nome']}', 
                                            email = '{$_POST['email']}', 
                                            cidade = '{$_POST['cidade']}', 
                                            estado = '{$_POST['estado']}' 
                                            WHERE id = '{$_POST['usuario_id']}'");

    if($result)
        header("Location: ../../views/funcionarios/lista-funcionarios.php?alterado=true");
    else
        header("Location: ../../views/funcionarios/alterar-funcionario.php?erro=true&id={$id}");

}
alterarFuncionario($connect, $_POST['id']);

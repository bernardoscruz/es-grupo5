<?php include("includes/connect.php");
include("includes/functions.php");

//$email, $cpf, $numero_identificacao, $salario, $cargo, $cidade, $estado, $nome

if(cadastraFuncionario($connect, $_POST['email'], $_POST['cpf'], $_POST['numero_identificacao'], $_POST['salario'], $_POST['cargo'], $_POST['cidade'], $_POST['estado'], $_POST['nome']))
{
    header("Location: lista-funcionarios.php?cadastrado=1");
}
else {
    header("Location: lista-funcionarios.php?cadastrado=0");
}
?>
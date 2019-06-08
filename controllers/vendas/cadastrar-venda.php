<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:11
 */

include("../../includes/connect.php");
var_dump($_POST);

/**
 * Cadastra uma venda e distribui os valores de acordo com cada tabela da relação
 * @param $connect
 */
function cadastraVenda($connect)
{
    $valor1 = $valor2 = $valor3 = $valor4 = $valor5 = 0;

    // verifica quais produtos foram adicionados, e pega seus valores
    if (isset($_POST['produto_id']))
        $valor1 = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT preco FROM produtos WHERE id = '{$_POST['produto_id']}'")));
    if (isset($_POST['produto_id2']))
        $valor2 = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT preco FROM produtos WHERE id = '{$_POST['produto_id2']}'")));
    if (isset($_POST['produto_id3']))
        $valor3 = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT preco FROM produtos WHERE id = '{$_POST['produto_id3']}'")));
    if (isset($_POST['produto_id4']))
        $valor4 = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT preco FROM produtos WHERE id = '{$_POST['produto_id4']}'")));
    if (isset($_POST['produto_id5']))
        $valor5 = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT preco FROM produtos WHERE id = '{$_POST['produto_id5']}'")));

    // verifica a quantidade de cada produto, se for nulla, ela é setada para 0
    if ($_POST['quantidade1'] == "")
        $_POST['quantidade1'] = 0;
    if ($_POST['quantidade2'] == "")
        $_POST['quantidade2'] = 0;
    if ($_POST['quantidade3'] == "")
        $_POST['quantidade3'] = 0;
    if ($_POST['quantidade4'] == "")
        $_POST['quantidade4'] = 0;
    if ($_POST['quantidade5'] == "")
        $_POST['quantidade5'] = 0;

    // calcula o valor total da compra
    $valorTotal = $valor1 * $_POST['quantidade1'] + $valor2 * $_POST['quantidade2'] + $valor3 * $_POST['quantidade3'] + $valor4 * $_POST['quantidade4'] + $valor5 * $_POST['quantidade5'];

    // inserção das informações na tabela de vendas
    mysqli_query($connect, "INSERT INTO vendas (cliente_id, data, funcionario_id, valor) values ('{$_POST['cliente_id']}', '{$_POST['data']}','{$_POST['funcionario_id']}', '{$valorTotal}')");

    // pega o id da última venda inserida no banco
    $vendaId = mysqli_insert_id($connect);

    // inserção das informações na tabela pivô da relação
    if (isset($_POST['produto_id']))
        mysqli_query($connect, "INSERT INTO venda_produto (produto_id, venda_id, quantidade) values ('{$_POST['produto_id']}', '{$vendaId}', '{$_POST['quantidade1']}')");
    if (isset($_POST['produto_id2']))
        mysqli_query($connect, "INSERT INTO venda_produto (produto_id, venda_id, quantidade) values ('{$_POST['produto_id2']}', '{$vendaId}', '{$_POST['quantidade2']}')");
    if (isset($_POST['produto_id3']))
        mysqli_query($connect, "INSERT INTO venda_produto (produto_id, venda_id, quantidade) values ('{$_POST['produto_id3']}', '{$vendaId}', '{$_POST['quantidade3']}')");
    if (isset($_POST['produto_id4']))
        mysqli_query($connect, "INSERT INTO venda_produto (produto_id, venda_id, quantidade) values ('{$_POST['produto_id4']}', '{$vendaId}', '{$_POST['quantidade4']}')");
    if (isset($_POST['produto_id5']))
        mysqli_query($connect, "INSERT INTO venda_produto (produto_id, venda_id, quantidade) values ('{$_POST['produto_id5']}', '{$vendaId}', '{$_POST['quantidade5']}')");

    header("Location: ../../views/vendas/lista-vendas.php?cadastrado=1");
}

cadastraVenda($connect);
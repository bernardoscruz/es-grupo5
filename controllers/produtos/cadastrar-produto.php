<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 14:48
 */

require("../../includes/connect.php");

/**
 * Cadastra um produto
 * @param $connect
 */
function cadastrarProduto($connect)
{
    $query = "INSERT INTO produtos (nome, preco, fabricante, desconto, quantidade, setor_id) values(
              '{$_POST['nome']}', 
              '{$_POST['preco']}', 
              '{$_POST['fabricante']}', 
              '{$_POST['desconto']}', 
              '{$_POST['quantidade']}', 
              '{$_POST['setor_id']}') ";

    if (mysqli_query($connect, $query))
        header("Location: ../../views/produtos/lista-produtos.php?cadastrado=1");
    else
        header("Location: ../../views/produtos/cadastrar-produto.php?cadastrado=0");
}

cadastrarProduto($connect);
<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 03/06/2019
 * Time: 18:07
 */

/**
 * @param $connect
 */

require ("../../includes/connect.php");
$query = "INSERT INTO setores (nome, administrador_responsavel, numero_identificacao) 
                values('{$_POST['nome']}', '{$_POST['administrador_responsavel']}', '{$_POST['numero_identificacao']}')";

if (mysqli_query($connect, $query)) {
    header("Location: ../../views/setores/lista-setores.php?cadastrado=1");
} else {
    header("Location: ../../views/setores/cadastrar-setor.php?cadastrado=0");
}

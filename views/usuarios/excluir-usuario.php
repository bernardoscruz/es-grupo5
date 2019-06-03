<?php
include("../../includes/connect.php");
include("../../includes/functions.php");
$id = $_POST['id'];
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "";
excluirUsuario($connect, $id, $categoria);
if($categoria == "cliente")
    header("Location: lista-clientes.php?excluido=true");
else
    header("Location: lista-usuarios.php?excluido=true");
die();
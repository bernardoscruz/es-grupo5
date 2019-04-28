<?php
include("includes/connect.php");
include("includes/functions.php");
$id = $_POST['id'];
excluirUsuario($connect, $id);
header("Location: lista-usuarios.php?excluido=true");
die();
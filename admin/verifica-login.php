<?php include("includes/connect.php");
include("includes/functions.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($connect, $email, $senha);

if($usuario == null)
{
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../login.php';</script>";
}
else
{
    session_start();
    $_SESSION['islogged'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['categoria'] = $usuario['categoria'];

    if($usuario['categoria'] == 'cliente' )
    {
        //header("Location: ../home.php?usuario=".$usuario['nome']."");
        header("Location: ../home.php?usuario");
    }
    else
    {
        header("Location: lista-usuarios.php");
    }
}
die();
<?php include("admin/includes/connect.php");
include("admin/includes/functions.php");

session_start();
if(_SESSION['islogged']){
    unset($_SESSION['islogged']);
    unset($_SESSION['email']);
    unset($_SESSION['categoria']);
    header("Location: home.php");
}
?>
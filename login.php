<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="publico/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="publico/css/estilo.css">
</head>

<?php
include "header.php";
?>

<hr>

<body>
    <div id="wrap">
        <div id="main" class="container clear-top">
            <!-- Script para fazer a máscara. Com ele, você pode definir qualquer tipo de máscara com o comando onkeypress="mascara(this, '###.###.###-##')". -->
            <script language="JavaScript">
                function mascara(t, mask)
                {
                    var i = t.value.length;
                    var saida = mask.substring(1,0);
                    var texto = mask.substring(i)
                    if (texto.substring(0,1) != saida)
                    {
                        t.value += texto.substring(0,1);
                    }
                }
            </script>
            <!-- Fim do script -->
            <!-- Formulário de Cadastro de Usuário -->
            <form action="" method="POST" target="_self">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="name" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                    </div>
                </fieldset>
                <br>
                <button type="submit" class="btn btn-primary" value="Submit" name="submit">Confirmar</button>
            </form>
            <!-- Fim do Formulário de Cadastro de Usuário  -->
            <?php
            /* Ligação com Banco de Dados */
            if(isset($_POST["submit"]))
            {
                include_once("conexao.php");/* Estabelece a conexão */

                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha`= '$senha'";
                $salvar = mysqli_query($conexao,$sql);

                if( !isset($_SESSION) )
                    session_start();

                if( mysqli_num_rows($salvar) > 0 )
                {
                    $_SESSION['islogged'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['tipo'] = mysqli_fetch_assoc($salvar)['tipo'];
                    ?>
                    <meta http-equiv="refresh" content="0; url=index.php">
                    <?php
                }
                else
                {
                    ?>
                    <div class="alert alert-warning">Falha ao logar usuário!</div>
                    <?php
                }

                mysqli_close($conexao);

            }

            ?>
        </div>
    </div>   
</body>

<hr>

<?php
include "footer.php";
?>

</html>
<!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--Links do Menu-->
  <div class="container collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="quemSomos.php">Quem Somos</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="localizacao.php">Localização</a>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="produto.php">Produtos</a>
        </li>


        <?php

        session_start();
        if( !isset($_SESSION['islogged']) || !$_SESSION['islogged'] ) { // Nenhum usuário logado

            ?>

            <li class="nav-item">
                <a class="nav-link" href="cadastroUsuario.php">Cadastro de Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php
        }
        else
        {
            /*
            include_once("conexao.php");

            $sql = "SELECT * FROM `usuarios` WHERE `email` = " . $_SESSION['email'];
            $salvar = mysqli_query($conexao,$sql);*/

            if ($_SESSION['tipo'] == "admin") // Só pode cadastrar usuário se não estiver logado OU se for admin
            {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroUsuario.php">Cadastro de Usuário</a>
                </li>
                <?php
            }

            ?>

            <form action="" method="POST" target="_self">
                <input type="hidden" value="t">
                <button type="submit" class="btn btn-primary" value="Submit" name="submit">Sair</button>
            </form>

            <?php

            if( $_POST )
            {
                $_SESSION['islogged'] = false;
                ?>
                <meta http-equiv="refresh" content="0; url=index.php">
                <?php
            }
        }
        ?>
    </ul>
  </div>
  <!--Links do Menu-->
</nav>
<!--Menu-->
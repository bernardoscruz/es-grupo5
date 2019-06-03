<?php session_start(); ?>
<header>
    <nav style="background-color: #b11016;" class="navbar navbar-default">
        <div class="container">
            <a href="home.php"><img style="width:10%; height: 10%;" class="img-responsive logo" src="../../css/img/logo.png"
                                    alt="logo"></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-links"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-links">
                <ul class="nav navbar-nav">
                    <?php
                    if ($_SESSION['categoria'] == 'administrador') {
                        ?>
                        <li>
                            <a href="../setores/lista-setores.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Setores
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../vendas/lista-vendas.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Vendas
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../clientes/lista-clientes.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Clientes
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../funcionarios/lista-funcionarios.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Funcionarios
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../usuarios/lista-usuarios.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Usuários
                                </button>
                            </a>
                        </li>
                    <?php }
                    if ($_SESSION['categoria'] == 'administrador' || $_SESSION['categoria'] == 'funcionario') {
                        ?>
                    <li>
                        <a href="../produtos/produtos.php">
                            <button style="background-color: #fff; color: #b11016" type="button"
                                    class="btn btn-default navbar-btn">Produtos
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <button style="background-color: #fff; color: #b11016" type="button"
                                    class="btn btn-default navbar-btn">Logout
                            </button>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
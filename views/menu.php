<?php
include("UserHeader.php");
session_start(); ?>
<header>
    <nav style="background-color: #b11016;" class="navbar navbar-default">
        <div class="container">
            <a href="../../views/home.php"><img style="width:10%; height: 10%;" class="img-responsive logo" src="../../css/img/logo.png"
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
                                        class="btn btn-default navbar-btn">Setores <i class="fa fa-archive"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../vendas/lista-vendas.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Vendas <i class="fa fa-money"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../clientes/lista-clientes.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Clientes <i class="fa fa-shopping-cart"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../funcionarios/lista-funcionarios.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Funcionarios <i class="fa fa-briefcase"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="../usuarios/lista-usuarios.php">
                                <button style="background-color: #fff; color: #b11016" type="button"
                                        class="btn btn-default navbar-btn">Usuários <i class="fa fa-user"></i>
                                </button>
                            </a>
                        </li>
                    <?php }
                    if ($_SESSION['categoria'] == 'administrador' || $_SESSION['categoria'] == 'funcionario') {
                        ?>
                    <li>
                        <a href="../produtos/lista-produtos.php">
                            <button style="background-color: #fff; color: #b11016" type="button"
                                    class="btn btn-default navbar-btn">Produtos <i class="fa fa-tags"></i>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php">
                            <button style="background-color: #fff; color: #b11016" type="button"
                                    class="btn btn-default navbar-btn">Logout <i class="fa fa-long-arrow-right"></i>
                            </button>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
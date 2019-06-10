<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/clientes/lista-clientes.php");

if (isset($_GET['sort']))
    $sort = " order by " . $_GET['sort'];
else
    $sort = "";

$clientes = listaClientes($connect, $sort);
?>
<div class="container">
    <h1 style="color:#b11016" class="page-header">Clientes</h1>
    <div class="row">
        <div class="col-md-2">
            <a href="cadastrar-cliente.php">
                <button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">
                    Cadastrar Cliente
                </button>
            </a>
        </div>
        <div  class="col-md-10">
            <form method="get" action="lista-clientes.php">
                <div class="form-group row">
                    <label>
                        <select class="form-control" name="sort">
                            <option value="nome">Nome</option>
                            <option value="cidade">Cidade</option>
                            <option value="estado">Estado</option>
                            <option value="cnpj">CNPJ</option>
                        </select>
                    </label>
                    <a href="lista-clientes.php">
                        <button style="background-color: #fff; color: #b11016" type="submit" class="btn btn-default navbar-btn">
                            Ordenar <i class="fa fa-arrows-v"></i>
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <?php
    if (!empty($_GET['cadastrado'])) {
        ?>
        <p class="alert alert-success">Cadastro concluído com sucesso.</p>
        <?php
    }
    if (!empty($_GET['alterado'])) {
        ?>
        <p class="alert alert-success">Cliente alterado com sucesso.</p>
        <?php
    }
    if (!empty($_GET['excluido'])) {
        ?>
        <p class="alert alert-success">Cliente excluído com sucesso.</p>
        <?php
    } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>CNPJ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($clientes as $cliente) { ?>
                                <tr>
                                    <td><?= $cliente['cliente_id'] ?></td>
                                    <td><?= $cliente['nome'] ?></td>
                                    <td><?= $cliente['email'] ?></td>
                                    <td><?= $cliente['cidade'] ?></td>
                                    <td><?= $cliente['estado'] ?></td>
                                    <td><?= $cliente['cnpj'] ?></td>
                                    <td>
                                        <form action="visualizar-cliente.php" method="get">
                                            <input type="hidden" name="id" value="<?= $cliente['cliente_id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p>
                                            </button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="alterar-cliente.php" method="get">
                                            <input type="hidden" name="id" value="<?= $cliente['cliente_id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button>
                                        </form>

                                    </td>
                                    <td>
                                        <form action="excluir-cliente.php" method="get">
                                            <input type="hidden" name="id" value="<?= $cliente['cliente_id'] ?>">
                                            <input type="hidden" name="usuario_id"
                                                   value="<?= $cliente['usuario_id'] ?>">
                                            <input type="hidden" name="categoria" value="cliente">
                                            <button type="submit" class="btn btn-danger"><p class="fa fa-trash-o">
                                                    Excluir</p>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

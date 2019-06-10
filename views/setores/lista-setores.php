<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
require('../../controllers/setores/lista-setores.php');

if (isset($_GET['sort']))
    $sort = " order by " . $_GET['sort'];
else
    $sort = "";

$setores = listaSetores($connect, $sort);
?>
<div class="container">
    <h1 style="color:#b11016" class="page-header">Setores</h1>
    <?php
    if (isset($_GET["cadastrado"]) && $_GET["cadastrado"] == true) {
        ?>
        <p class="alert alert-success">Cadastro concluído com sucesso.</p>
        <?php
    }
    if (isset($_GET["cadastrado"]) && $_GET["cadastrado"] == false) {
        ?>
        <p class="alert alert-danger">Cadastro não pôde ser concluído.</p>
        <?php
    } ?>
    <div class="row">
        <div class="col-md-2">
            <a href="cadastrar-setor.php">
                <button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">
                    Cadastrar Setor
                </button>
            </a>
        </div>
        <div  class="col-md-10">
            <form method="get" action="lista-setores.php">
                <div class="form-group row">
                    <label>
                        <select class="form-control" name="sort">
                            <option value="nome">Nome</option>
                            <option value="administrador_responsavel">Administrador Responsável</option>
                            <option value="numero_identificacao">Número de Identificação</option>
                        </select>
                    </label>
                    <a href="lista-setores.php">
                        <button style="background-color: #fff; color: #b11016" type="submit" class="btn btn-default navbar-btn">
                            Ordenar <i class="fa fa-arrows-v"></i>
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (!empty($_GET['alterado'])) {
        ?>
        <p class="alert alert-success">Setor alterado com sucesso.</p>
        <?php
    }
    if (!empty($_GET['excluido'])) {
        ?>
        <p class="alert alert-success">Setor excluído com sucesso.</p>
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
                                <th>Administrador Responsável</th>
                                <th>Número de Identificação</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($setores as $setor) : ?>
                                <tr>
                                    <td><?= $setor['id'] ?></td>
                                    <td><?= $setor['nome'] ?></td>
                                    <td><?= $setor['administrador_responsavel'] ?></td>
                                    <td><?= $setor['numero_identificacao'] ?></td>
                                    <td>
                                        <form action="../setores/visualizar-setor.php" method="get">
                                            <input type="hidden" name="id" value="<?= $setor['id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p>
                                            </button>
                                        </form>
                                    </td>

                                    <td>
                                    <td>
                                        <form action="../setores/alterar-setor.php" method="get">
                                            <input type="hidden" name="id" value="<?= $setor['id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="../setores/excluir-setor.php" method="get">
                                            <input type="hidden" name="id" value="<?= $setor['id'] ?>">
                                            <button class="btn btn-danger"><p class="fa fa-trash-o"> Excluir</p>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:06
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
require('../../controllers/vendas/lista-vendas.php');

if (isset($_GET['sort']))
    $sort = " order by " . $_GET['sort'];
else
    $sort = "";

$vendas = listaVendas($connect, $sort);
?>
<div class="container">
    <h1 style="color:#b11016" class="page-header">Vendas</h1>
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
            <a href="cadastrar-venda.php">
                <button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">
                    Cadastrar Venda
                </button>
            </a>
        </div>
        <div  class="col-md-10">
            <form method="get" action="lista-vendas.php">
                <div class="form-group row">
                    <label>
                        <select class="form-control" name="sort">
                            <option value="cliente_id">Cliente</option>
                            <option value="valor">Valor Total</option>
                            <option value="data">Data</option>
                            <option value="funcionario_id">Funcionário Responsável</option>
                        </select>
                    </label>
                    <a href="lista-vendas.php">
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
        <p class="alert alert-success">Venda alterado com sucesso.</p>
        <?php
    }
    if (!empty($_GET['excluido'])) {
        ?>
        <p class="alert alert-success">Venda excluído com sucesso.</p>
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
                                <th>Funcionário Responsável</th>
                                <th>Cliente</th>
                                <th>Data</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($vendas as $venda) : ?>
                                <?php
                                $clienteNome = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT nome FROM usuarios WHERE id = {$venda['cliente_usuario_id']}")));
                                $funcionarioNome = implode("", mysqli_fetch_assoc(mysqli_query($connect, "SELECT nome FROM usuarios WHERE id = {$venda['funcionario_usuario_id']}")));
                                ?>
                                <tr>
                                    <td><?= $venda['venda_id'] ?></td>
                                    <td><?= $funcionarioNome ?></td>
                                    <td><?= $clienteNome ?></td>
                                    <td><?= $venda['data'] ?></td>
                                    <td><?= $venda['valor'] ?> R$</td>
                                    <td>
                                        <form action="../vendas/visualizar-venda.php" method="get">
                                            <input type="hidden" name="id" value="<?= $venda['venda_id'] ?>">
                                            <input type="hidden" name="clienteNome" value="<?= $clienteNome ?>">
                                            <input type="hidden" name="funcionarioNome" value="<?= $funcionarioNome ?>">
                                            <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p>
                                            </button>
                                        </form>
                                    </td>

                                    <td>
                                    <td>
                                        <form action="../vendas/alterar-venda.php" method="get">
                                            <input type="hidden" name="id" value="<?= $venda['venda_id'] ?>">
                                            <input type="hidden" name="clienteNome" value="<?= $clienteNome ?>">
                                            <input type="hidden" name="funcionarioNome" value="<?= $funcionarioNome ?>">
                                            <input type="hidden" name="cliente_id" value="<?= $venda['cliente_id'] ?>">
                                            <input type="hidden" name="funcionario_id"
                                                   value="<?= $venda['funcionario_id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="../vendas/excluir-venda.php" method="get">
                                            <input type="hidden" name="id" value="<?= $venda['venda_id'] ?>">
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


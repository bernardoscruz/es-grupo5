<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
require('../../controllers/produtos/lista-produtos.php');

if (isset($_GET['sort']))
    $sort = " order by " . $_GET['sort'];
else
    $sort = "";

$produtos = listaProdutos($connect, $sort);
?>
<div class="container">
    <h1 style="color:#b11016" class="page-header">Produtos</h1>
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
            <a href="cadastrar-produto.php">
                <button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">
                    Cadastrar Produto
                </button>
            </a>
        </div>
        <div  class="col-md-10">
            <form method="get" action="lista-produtos.php">
                <div class="form-group row">
                    <label>
                        <select class="form-control" name="sort">
                            <option value="preco">Preço</option>
                            <option value="quantidade">Quantidade</option>
                            <option value="setor_id">Setor</option>
                        </select>
                    </label>
                    <a href="lista-produtos.php">
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
        <p class="alert alert-success">Produto alterado com sucesso.</p>
        <?php
    }
    if (!empty($_GET['excluido'])) {
        ?>
        <p class="alert alert-success">Produto excluído com sucesso.</p>
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
                                <th>Preço</th>
                                <th>Fabricante</th>
                                <th>Desconto</th>
                                <th>Quantidade</th>
                                <th>Setor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($produtos as $produto) : ?>
                                <tr>
                                    <td><?= $produto['produto_id'] ?></td>
                                    <td><?= $produto['produto_nome'] ?></td>
                                    <td><?= $produto['preco'] ?> R$</td>
                                    <td><?= $produto['fabricante'] ?></td>
                                    <td><?= $produto['desconto'] ?></td>
                                    <td><?= $produto['quantidade'] ?></td>
                                    <td><?= $produto['nome'] ?></td>
                                    <td>
                                        <form action="../produtos/visualizar-produto.php" method="get">
                                            <input type="hidden" name="id" value="<?= $produto['produto_id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p>
                                            </button>
                                        </form>
                                    </td>

                                    <td>
                                    <?php if($_SESSION['categoria'] == 'administrador') { ?>
                                    <td>
                                        <form action="../produtos/alterar-produto.php" method="get">
                                            <input type="hidden" name="id" value="<?= $produto['produto_id'] ?>">
                                            <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="../produtos/excluir-produto.php" method="get">
                                            <input type="hidden" name="id" value="<?= $produto['produto_id'] ?>">
                                            <button class="btn btn-danger"><p class="fa fa-trash-o"> Excluir</p>
                                            </button>
                                        </form>
                                    </td>
                                    <?php }?>
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


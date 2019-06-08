<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:07
 */

include("../UserHeader.php");
include("../menu.php");
include("../../controllers/produtos/lista-produtos.php");
include("../../controllers/clientes/lista-clientes.php");
include("../../controllers/funcionarios/lista-funcionarios.php");
include("../../includes/connect.php");

$produtos = listaProdutos($connect, '');
$clientes = listaClientes($connect);
$funcionarios = listaFuncionarios($connect);

?>

<div class="container">
    <h1 style="color: #b11016" class="page-header">Cadastro de Venda</h1>
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
    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <form method="post" action="../../controllers/vendas/cadastrar-venda.php">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Cliente</label>
                            <select name="cliente_id" class="form-control">
                                <?php foreach ($clientes as $cliente) {
                                    ?>
                                    <option name="cliente_id" value="<?= $cliente['cliente_id'] ?>"><?= $cliente['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Funcionário</label>
                            <select name="funcionario_id" class="form-control">
                                <?php foreach ($funcionarios as $funcionario) {
                                    ?>
                                    <option name="funcionario_id" value="<?= $funcionario['funcionario_id'] ?>"><?= $funcionario['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <input class="form-control" name="data" type="date" required>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id" class="form-control" >
                                            <option selected disabled>Selecione um produto</option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id1" value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?> | <?= $produto['preco'] ?> R$</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input class="form-control" type="number" name="quantidade1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id2" class="form-control" >
                                        <option selected disabled>Selecione um produto</option>

                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id2" value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?> | <?= $produto['preco'] ?> R$</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input class="form-control" type="number" name="quantidade2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id3" class="form-control" >
                                        <option selected disabled>Selecione um produto</option>

                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id3" value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?> | <?= $produto['preco'] ?> R$</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input class="form-control" type="number" name="quantidade3">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id4" class="form-control" >
                                        <option selected disabled>Selecione um produto</option>

                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id4" value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?> | <?= $produto['preco'] ?> R$</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input class="form-control" type="number" name="quantidade4">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id5" class="form-control" >
                                        <option name="produto_id5" value="0" selected disabled>Selecione um produto</option>

                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id5" value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?> | <?= $produto['preco'] ?> R$</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input class="form-control" type="number" name="quantidade5">
                                </div>
                            </div>
                        </div>
                        <a href="lista-vendas.php"><button type="button" class="btn btn-primary btn-lg">Voltar</button></a>
                        <button style="float: right" type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


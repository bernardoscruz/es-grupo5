<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 06/06/2019
 * Time: 14:07
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/vendas/visualizar-venda.php");
include("../../controllers/produtos/lista-produtos.php");
include("../../controllers/clientes/lista-clientes.php");
include("../../controllers/funcionarios/lista-funcionarios.php");

$vendaId = $_GET['id'];
$venda = visualizarVenda($connect, $vendaId);
$produtosIds = getProdutosIds($connect, $_GET['id']);
$produtos = listaProdutos($connect, "");
$clientes = listaClientes($connect,"");
$funcionarios = listaFuncionarios($connect, "");
$produtosDaVenda = getProdutos($connect, $produtosIds);

?>
<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Alterar Venda</h1>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Informações</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div role="form">
                        <form method="post" action="../../controllers/vendas/alterar-venda.php">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <select class="form-control" name="cliente_id">
                                        <option selected
                                                value="<?= $_GET['cliente_id'] ?>"><?= $_GET['clienteNome'] ?></option>
                                        <?php foreach ($clientes as $cliente) { ?>
                                            <option value="<?= $cliente['cliente_id'] ?>"><?= $cliente['nome'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Funcionário</label>
                                    <select class="form-control" name="funcionario_id">
                                        <option selected
                                                value="<?= $_GET['funcionario_id'] ?>"><?= $_GET['funcionarioNome'] ?></option>
                                        <?php foreach ($funcionarios as $funcionario) { ?>
                                            <option value="<?= $funcionario['funcionario_id'] ?>"><?= $funcionario['nome'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Data</label><br/>
                                    <input type="date" name="data" class="form-control" value="<?= $venda['data'] ?>"
                                    >
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id1" class="form-control">
                                        <option value="<?php if(isset($produtosDaVenda[0]))echo $produtosDaVenda[0]['id'] ?>" selected ><?php if(isset($produtosDaVenda[0])) echo $produtosDaVenda[0]['nome'] ?></option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id1"
                                                    value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?>
                                                | <?= $produto['preco'] ?> R$
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input value="<?php if(isset($produtosIds[0]['quantidade'])) { echo $produtosIds[0]['quantidade']; } ?>" class="form-control" type="number" name="quantidade1">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id2" class="form-control">
                                        <option value="<?php if(isset($produtosDaVenda[1]))echo $produtosDaVenda[1]['id'] ?>" selected ><?php if(isset($produtosDaVenda[1]))echo $produtosDaVenda[1]['nome'] ?></option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id2"
                                                    value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?>
                                                | <?= $produto['preco'] ?> R$
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input value="<?php if(isset($produtosIds[1]['quantidade'])) {echo $produtosIds[1]['quantidade']; } ?>" class="form-control" type="number" name="quantidade2">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id3" class="form-control">
                                        <option value="<?php if(isset($produtosDaVenda[2]))echo $produtosDaVenda[2]['id'] ?>" selected ><?php if (isset($produtosDaVenda[2]))echo $produtosDaVenda[2]['nome'] ?></option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id3"
                                                    value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?>
                                                | <?= $produto['preco'] ?> R$
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input value="<?php if(isset($produtosIds[2]['quantidade'])) { echo $produtosIds[2]['quantidade']; }  ?>" class="form-control" type="number" name="quantidade3">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id4" class="form-control">
                                        <option value="<?php if (isset($produtosDaVenda[3]))echo $produtosDaVenda[3]['id'] ?>" selected ><?php if (isset($produtosDaVenda[3]))echo $produtosDaVenda[3]['nome'] ?></option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id4"
                                                    value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?>
                                                | <?= $produto['preco'] ?> R$
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input value="<?php if(isset($produtosIds[3]['quantidade'])) { echo $produtosIds[3]['quantidade']; }?>" class="form-control" type="number" name="quantidade4">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produtos / Preço</label>
                                    <select name="produto_id5" class="form-control">
                                        <option value="<?php if (isset($produtosDaVenda[4])) echo $produtosDaVenda[4]['id'] ?>" selected ><?php if (isset($produtosDaVenda[4]))echo $produtosDaVenda[4]['nome'] ?></option>
                                        <?php foreach ($produtos as $produto) {
                                            ?>
                                            <option name="produto_id5"
                                                    value="<?= $produto['produto_id'] ?>"><?= $produto['produto_nome'] ?>
                                                | <?= $produto['preco'] ?> R$
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qnt</label>
                                    <input value="<?php if(isset($produtosIds[4]['quantidade'])) { echo $produtosIds[4]['quantidade']; } ?>" class="form-control" type="number" name="quantidade5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="lista-vendas.php">
                                    <button type="button" class="btn btn-primary btn-lg">Voltar</button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button style="float: right" type="submit" class="btn btn-success btn-lg">Alterar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


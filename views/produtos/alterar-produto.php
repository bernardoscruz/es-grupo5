<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 15:26
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/produtos/visualizar-produto.php");
include("../../controllers/setores/lista-setores.php");

$setores = listaSetores($connect, '');
$id = $_GET['id'];
$produto = visualizarProduto($connect, $id);
?>
<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Atualizar Produto</h1>
    <?php if (!empty($_GET['erro'])) {
        ?>
        <p class="alert alert-danger">O Produto não pôde ser alterado.</p>
        <?php
    } ?>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Informações</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form method="post" action="../../controllers/produtos/alterar-produto.php">
                        <input name="id" type="hidden" value="<?= $produto['id'] ?>">
                        <div role="form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome" value="<?= $produto['nome'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Preço</label>
                                    <input type="number" step="0.01" class="form-control" name="preco"
                                           value="<?= $produto['preco'] ?>">R$
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Fabricante</label><br/>
                                    <input type="text" class="form-control" name="fabricante"
                                           value="<?= $produto['fabricante'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Desconto</label><br/>
                                    <input type="number" step="0.01" class="form-control" name="desconto"
                                           value="<?= $produto['desconto'] ?>">R$
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Quantidade</label><br/>
                                    <input class="form-control" name="quantidade" type="number"
                                           value="<?= $produto['quantidade'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Setor</label>
                                    <select name="setor_id" class="form-control">
                                        <?php foreach ($setores as $setor) {
                                            ?>
                                            <option name="setor_id" value="<?= $setor['id'] ?>"><?= $setor['nome'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="lista-produtos.php">
                                    <button type="button" class="btn btn-primary btn-lg">Voltar</button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


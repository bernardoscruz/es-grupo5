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

$vendaId = $_GET['id'];
$venda = visualizarVenda($connect, $vendaId);
$produtosIds = getProdutosIds($connect, $_GET['id']);
$produtos = getProdutos($connect, $produtosIds);

?>
<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Visualizar Venda</h1>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cliente</label
                                <label>
                                    <input class="form-control" value="<?= $_GET['clienteNome'] ?>" disabled>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Funcionário</label>
                                <input class="form-control"
                                       value="<?= $_GET['funcionarioNome'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Data</label><br/>
                                <input class="form-control" value="<?= $venda['data'] ?>"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Valor</label><br/>
                                <input class="form-control" value="<?= $venda['valor'] ?> R$"
                                       disabled>
                            </div>
                        </div>
                        <?php $i = 0;
                        foreach ($produtos as $produto) { ?>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Produto <?php echo $i + 1 ?></label><br/>
                                    <input class="form-control"
                                           value="<?= $produto['nome'] ?> | <?= $produto['preco'] ?>  R$"
                                           disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qntd </label><br/>
                                    <input class="form-control" value=" <?= $produtosIds[$i]['quantidade'] ?>"
                                           disabled>
                                </div>
                            </div>
                            <?php $i++;
                        } ?>
                        <div class="col-md-12">
                            <a href="lista-vendas.php">
                                <button class="btn btn-primary btn-lg">Voltar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


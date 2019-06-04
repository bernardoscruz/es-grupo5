<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/produtos/visualizar-produto.php");
$id = $_GET['id'];
$produto = visualizarProduto($connect, $id);
?>
<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Visualizar Produto</h1>
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
                                <label>Nome</label>
                                <input class="form-control"  value="<?= $produto['nome'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Preço</label>
                                <input class="form-control"
                                       value="<?= $produto['preco'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Fabricante</label><br/>
                                <input class="form-control"  value="<?= $produto['fabricante'] ?>"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Desconto</label><br/>
                                <input class="form-control"  value="<?= $produto['desconto'] ?>"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Quantidade</label><br/>
                                <input class="form-control"  value="<?= $produto['quantidade'] ?>"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Setor</label><br/>
                                <input class="form-control"  value="<?= $produto['setor_id'] ?>"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="lista-produtos.php">
                                <button  class="btn btn-primary btn-lg">Voltar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


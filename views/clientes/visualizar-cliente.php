<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/clientes/visualizar-cliente.php");

$cliente =  visualizarCliente($connect, $_GET['id']);
?>
    <div class="container">
        <input type="hidden" name="id" value="<?=$cliente['id']?>" disabled>
        <h1 style="color: #b11016;" class="page-header">Visualizar Cliente</h1>
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
                                    <input class="form-control" name="nome" value="<?=$cliente['nome']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="<?=$cliente['email']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input class="form-control" name="cidade" value="<?=$cliente['cidade']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input class="form-control" name="estado" value="<?=$cliente['estado']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>CNPJ</label>
                                    <input class="form-control" name="cnpj" value="<?=$cliente['cnpj']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="lista-clientes.php">
                                    <button class="btn btn-primary btn-lg">Voltar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php // include("footer.php") ?>
<?php include("header.php");
include("includes/connect.php");
include("includes/functions.php");
include("menu.php");
$usuario = buscaUsuarioPeloId($connect, $_GET['id']);
$cliente =  buscaClientePeloId($connect, $_GET['id']);
?>
    <div class="container">
        <input type="hidden" name="id" value="<?=$usuario['id']?>" disabled>
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
                                    <input class="form-control" name="nome" value="<?=$usuario['nome']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="<?=$usuario['email']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input class="form-control" name="cidade" value="<?=$usuario['cidade']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <input class="form-control" name="estado" value="<?=$usuario['estado']?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>CNPJ</label>
                                    <input class="form-control" name="cnpj" value="<?=$cliente['cnpj']?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Criado em:</label>
                                <input type="date" class="form-control" name="created_at" value="<?=$usuario['created_at']?>" disabled>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <div class="form-group">
                                <label>Atualizado em:</label>
                                <input type="date" class="form-control" name="updated_at" value="<?=$usuario['updated_at']?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php // include("footer.php") ?>
<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/setores/visualizar-setor.php");
$id = $_GET['id'];
$setor = visualizarSetor($connect, $id);
?>
<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Visualizar Setor</h1>
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
                                <input class="form-control" name="nome" value="<?= $setor['nome'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Administrador Responsável</label>
                                <input class="form-control" name="email"
                                       value="<?= $setor['administrador_responsavel'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Número de Identificação</label><br/>
                                <input class="form-control" name="email" value="<?= $setor['numero_identificacao'] ?>"
                                       disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="lista-setores.php">
            <button  class="btn btn-success btn-lg">Voltar</button>
        </a>
    </div>
</div>


<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 11:20
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/setores/visualizar-setor.php");
$id = $_GET['id'];
$setor = visualizarSetor($connect, $id);
?>
<div class="container">
    <div class="col-md-12">
        <a href="lista-setores.php"><i style="color: #761c19" class="fa fa-hand-o-left fa-3x">Voltar</i></a>
    </div>
    <h1 style="color: #b11016; text-align: center" class="page-header">Atualizar Setor</h1>
    <?php if(!empty($_GET['erro'])) {
        ?>
        <p class="alert alert-danger">Setor não pôde ser alterado.</p>
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
                    <form method="post" action="../../controllers/setores/alterar-setor.php">
                        <input name="id" type="hidden" value="<?= $setor['id'] ?>">
                        <div role="form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome" value="<?= $setor['nome'] ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Administrador Responsável</label>
                                    <input class="form-control" name="administrador_responsavel"
                                           value="<?= $setor['administrador_responsavel'] ?>" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Número de Identificação</label><br/>
                                    <input class="form-control" name="numero_identificacao" value="<?= $setor['numero_identificacao'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="lista-setores.php"><button type="button" class="btn btn-lg btn-primary">Voltar</button></a>
                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


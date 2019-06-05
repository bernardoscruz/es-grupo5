<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 03/06/2019
 * Time: 17:59
 */

include("../UserHeader.php");
include("../menu.php");
?>

<div class="container">
    <h1 style="color: #b11016" class="page-header">Cadastro de Setor</h1>
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
                <form method="post" action="../../controllers/setores/cadastrar-setor.php">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control" name="nome" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Administrador Responsável</label>
                            <input class="form-control" name="administrador_responsavel" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Número de Identificacao</label>
                            <input class="form-control" name="numero_identificacao" type="number" required>
                        </div>
                        <a href="lista-setores.php"><button type="button" class="btn btn-primary btn-lg">Voltar</button></a>
                        <button style="float: right" type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 09/06/2019
 * Time: 14:32
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");

?>

<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header"><strong>Excluir Funcionário</strong></h1>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 style="color: #761c19">Você tem certeza que deseja excluir esse funcionário?</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <a href="lista-funcionarios.php"><button type="button" class="btn btn-lg btn-primary">Voltar</button></a>
                    </div>
                    <div class="col-md-6">
                        <form method="post" action="../../controllers/funcionarios/excluir-funcionario.php">
                            <input name="id" type="hidden" value="<?= $_POST['id'] ?>">
                            <input name="usuario_id" type="hidden" value="<?= $_POST['usuario_id'] ?>">
                            <button  type="submit" class="btn btn-danger btn-lg">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 09/06/2019
 * Time: 23:00
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
$id = $_GET['id'];

?>

<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header"><strong>Excluir Usuário</strong></h1>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 style="color: #761c19">Você tem certeza que deseja excluir essa venda?</h4>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="lista-vendas.php">
                                <button class="btn btn-primary btn-lg">Voltar</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="../../controllers/usuarios/excluir-usuario.php">
                                <input name="id" type="hidden" value="<?= $id ?>">
                                <button type="submit" class="btn btn-danger btn-lg">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
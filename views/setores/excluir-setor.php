<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 04/06/2019
 * Time: 12:09
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
$id = $_GET['id'];

?>

<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header"><strong>Excluir Setor</strong></h1>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 style="color: #761c19">Se você excluir um setor todos os produtos desse setor também serão excluídos</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form method="post" action="../../controllers/setores/excluir-setor.php">
                        <input name="id" type="hidden" value="<?= $id ?>">
                        <button  type="submit" class="btn btn-danger btn-lg">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


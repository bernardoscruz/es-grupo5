<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 03/06/2019
 * Time: 17:59
 */

include("../UserHeader.php");
include("../menu.php");
include("../../controllers/setores/lista-setores.php");
include("../../includes/connect.php");
$setores = listaSetores($connect, '');

?>

<div class="container">
    <div class="col-md-12">
        <a href="lista-produtos.php"><i style="color: #761c19" class="fa fa-hand-o-left fa-3x">Voltar</i></a>
    </div>
    <h1 style="color: #b11016" class="page-header">Cadastro de Produto</h1>
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
                <form method="post" action="../../controllers/produtos/cadastrar-produto.php">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control" name="nome" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Preço</label>
                            <input class="form-control" name="preco" type="number" step="0.01" required>R$
                        </div>
                        <div class="form-group">
                            <label>Fabricante</label>
                            <input class="form-control" name="fabricante" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Desconto</label>
                            <input class="form-control" name="desconto" type="number" step="0.01" required>R$
                        </div>
                        <div class="form-group">
                            <label>quantidade</label>
                            <input class="form-control" name="quantidade" type="number" required>
                        </div>
                        <div class="form-group">
                            <label>Setor</label>
                            <select name="setor_id" class="form-control">
                                <?php foreach ($setores as $setor) {
                                    ?>
                                    <option name="setor_id" value="<?= $setor['id'] ?>"><?= $setor['nome'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


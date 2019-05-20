<?php include("header.php") ?>

<div class="container">
    <h1 style="color: #b11016" class="page-header">Cadastro de Funcionário</h1>
    <?php
    if(isset($_GET["cadastrado"]) && $_GET["cadastrado"] == true) {
        ?>
        <p class="alert alert-success" >Cadastro concluído com sucesso.</p>
        <?php
    }
    if(isset($_GET["cadastrado"]) && $_GET["cadastrado"] == false) {
        ?>
        <p class="alert alert-danger" >Cadastro não pôde ser concluído.</p>
        <?php
    } ?>
    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <form method="post" action="lista-funcionarios.php">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input class="form-control" name="nome" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input class="form-control" name="cidade" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input class="form-control" name="cidade" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input class="form-control" name="cpf" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Categoria</label><br/>
                            <label class="radio-inline">
                                <input type="radio" name="cargo" id="optionsRadiosInline1" value="funcionario">Funcionário</label>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="cargo" id="optionsRadiosInline2" value="administrador">Administrador</label>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Salário</label>
                            <input class="form-control" name="salario" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input class="form-control" name="senha" type="password" required>
                        </div>

                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

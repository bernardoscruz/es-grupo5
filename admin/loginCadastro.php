<?php include("header.php") ?>
<?php include("menu.php") ?>
<div class="container">
    <h1 style="color: #b11016" class="page-header">Cadastro de Usuário</h1>
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
                <form method="post" action="cadastra-login.php">
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
                            <label>Senha</label>
                            <input class="form-control" name="senha" type="password" required>
                        </div>   
                        <div class="form-group">
									<label>Categoria</label><br/>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline1" value="cliente">Cliente</label>
									</label>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline2" value="funcionario">Funcionário</label>
									</label>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline2" value="administrador">Administrador</label>
									</label>
						</div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

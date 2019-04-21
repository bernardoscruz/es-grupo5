<?php include("header.php"); ?>
<div class="container" center-block>
    <div class="row login">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <form method="post" action="admin/verifica-login.php">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Login</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input class="form-control" placeholder="Usuário" name="email" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="senha" type="password" required>
                        </div>                        
                            <button type="submit" class="btn btn-default">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
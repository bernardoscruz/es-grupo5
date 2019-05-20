<?php include("header.php");
include("includes/connect.php");
include("includes/functions.php");
include("menu.php");



if (isset($_GET['sort']))
    $sort = " order by ".$_GET['sort'];
else
    $sort = "";

$usuarios = listaFuncionarios($connect, $sort);
?>
    <div class="container">
        <h1 style="color:#b11016" class="page-header">Usuários</h1>
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
        <form method="get" action="lista-funcionarios.php">
            <a href="registrar-funcionario.php"><button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">Cadastrar Funcionário</button></a>

            <a href="lista-funcionarios.php"><button style="background-color: #fff; color: #b11016" type="submit" class="btn btn-default navbar-btn">Ordenar</button></a>

            <select name="sort">
                <option value="usuarios.nome">Nome</option>
                <option value="usuarios.cidade">Cidade</option>
                <option value="usuarios.estado">Estado</option>
            </select>
        </form>

        <?php
        if(!empty($_GET['cadastrado'])) {
            ?>
            <p class="alert alert-success" >Cadastro concluído com sucesso.</p>
            <?php
        }
        if(!empty($_GET['alterado'])) {
            ?>
            <p class="alert alert-success">Usuário alterado com sucesso.</p>
            <?php
        }
        if(!empty($_GET['excluido'])) {
            ?>
            <p class="alert alert-success">Usuário excluído com sucesso.</p>
            <?php
        } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>CPF</th>
                                    <th>Salário</th>
                                    <th>Criado em</th>
                                    <th>Atualizado em</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($usuarios as $usuario) :?>
                                    <tr>
                                        <td><?=$usuario['id']?></td>
                                        <td><?=$usuario['nome']?></td>
                                        <td><?=$usuario['email']?></td>
                                        <td><?=$usuario['cidade']?></td>
                                        <td><?=$usuario['estado']?></td>
                                        <td><?=$usuario['cpf']?></td>
                                        <td><?=$usuario['salario']?></td>
                                        <td><?=$usuario['created_at']?></td>
                                        <td><?=$usuario['updated_at']?></td>
                                        <td>
                                            <form action="visualizar-usuario.php" method="get">
                                                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                                                <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p></button></td>
                                        </form>
                                        <td>
                                        <td>
                                            <form action="alterar-usuario.php" method="get">
                                                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                                                <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button></td>
                                        </form>
                                        <td>
                                            <form action="excluir-usuario.php" method="post">
                                                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                                                <button class="btn btn-danger"><p class="fa fa-trash-o"> Excluir</p></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php //include("footer.php") ?>
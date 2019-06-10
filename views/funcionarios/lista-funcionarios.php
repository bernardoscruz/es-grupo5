<?php

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/funcionarios/lista-funcionarios.php");

if (isset($_GET['sort']))
    $sort = " order by ".$_GET['sort'];
else
    $sort = "";

$funcionarios = listaFuncionarios($connect, $sort);
?>
    <div class="container">
        <h1 style="color:#b11016" class="page-header">Funcionários</h1>
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
            <a href="cadastrar-funcionario.php"><button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">Cadastrar Funcionário</button></a>

            <a href="lista-funcionarios.php"><button style="background-color: #fff; color: #b11016" type="submit" class="btn btn-default navbar-btn">Ordenar</button></a>

            <select name="sort">
                <option value="nome">Nome</option>
                <option value="numero_identificacao">Número de Identificação</option>
                <option value="cargo">Cargo</option>
            </select>
        </form>

        <?php
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
                                    <th>Cargo</th>
                                    <th>Número de Identificação</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($funcionarios as $funcionario) :?>
                                    <tr>
                                        <td><?=$funcionario['funcionario_id']?></td>
                                        <td><?=$funcionario['nome']?></td>
                                        <td><?=$funcionario['email']?></td>
                                        <td><?=$funcionario['cidade']?></td>
                                        <td><?=$funcionario['estado']?></td>
                                        <td><?=$funcionario['cpf']?></td>
                                        <td><?=$funcionario['cargo']?></td>
                                        <td><?=$funcionario['numero_identificacao']?></td>
                                        <td>
                                            <form action="visualizar-funcionario.php" method="get">
                                                <input type="hidden" name="id" value="<?=$funcionario['funcionario_id']?>">
                                                <button class="btn btn-primary"><p class="fa fa-search">Visualizar</p></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="alterar-funcionario.php" method="get">
                                                <input type="hidden" name="id" value="<?=$funcionario['funcionario_id']?>">
                                                <button class="btn btn-primary"><p class="fa fa-edit"> Alterar</p></button>
                                                </form>
                                        </td>
                                        <td>
                                            <form action="excluir-funcionario.php" method="post">
                                                <input type="hidden" name="id" value="<?=$funcionario['funcionario_id']?>">
                                                <input type="hidden" name="usuario_id" value="<?=$funcionario['usuario_id']?>">
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
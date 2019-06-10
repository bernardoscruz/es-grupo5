<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 09/06/2019
 * Time: 14:31
 */

include("../UserHeader.php");
include("../../includes/connect.php");
include("../menu.php");
include("../../controllers/funcionarios/visualizar-funcionario.php");

$funcionario = visualizarFuncionario($connect, $_GET['id']);
?>
<div class="container">
    <input type="hidden" name="id" value="<?= $funcionario['funcionario_id'] ?>" disabled>
    <h1 style="color: #b11016;" class="page-header">Visualizar Funcionário</h1>
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Informações</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div role="form">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" name="nome" value="<?= $funcionario['nome'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="<?= $funcionario['email'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input class="form-control" name="cidade" value="<?= $funcionario['cidade'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Estado</label>
                                <input class="form-control" name="estado" value="<?= $funcionario['estado'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>CPF</label>
                                <input class="form-control" name="cpf" value="<?= $funcionario['cpf'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Salário</label>
                                <input class="form-control"  value="<?= $funcionario['salario'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Cargo</label>
                                <input class="form-control"  value="<?= $funcionario['cargo'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Número de Identificação</label>
                                <input class="form-control"  value="<?= $funcionario['numero_identificacao'] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="lista-funcionarios.php">
                                <button class="btn btn-primary btn-lg">Voltar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

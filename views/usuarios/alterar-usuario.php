<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../../includes/functions.php");
include("../menu.php");
$usuario = buscaUsuarioPeloId($connect, $_GET['id']);
$cliente = buscaClientePeloId($connect, $_GET['id']);
?>
    <div class="container">
        <form action="../../controllers/usuarios/alterar-usuario.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
            <h1 style="color: #b11016; text-align: center" class="page-header">Alterar Usuário</h1>
            <?php if (!empty($_GET['erro'])) {
                ?>
                <p class="alert alert-danger">Usuário não pôde ser alterado.</p>
                <?php
            } ?>
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
                                        <input class="form-control" name="nome" value="<?= $usuario['nome'] ?>"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" value="<?= $usuario['email'] ?>"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input class="form-control" name="cidade" value="<?= $usuario['cidade'] ?>"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select id="inputState" name="estado" class="form-control">
                                            <option value="<?= $usuario['estado'] ?>" selected><?= $usuario['estado'] ?></option>
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>AP</option>
                                            <option>AM</option>
                                            <option>BA</option>
                                            <option>CE</option>
                                            <option>DF</option>
                                            <option>ES</option>
                                            <option>GO</option>
                                            <option>MA</option>
                                            <option>MT</option>
                                            <option>MS</option>
                                            <option>MG</option>
                                            <option>PA</option>
                                            <option>PB</option>
                                            <option>PR</option>
                                            <option>PE</option>
                                            <option>PI</option>
                                            <option>RJ</option>
                                            <option>RN</option>
                                            <option>RS</option>
                                            <option>RO</option>
                                            <option>RR</option>
                                            <option>SC</option>
                                            <option>SP</option>
                                            <option>SE</option>
                                            <option>TO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Categoria</label><br/>
                                        <label class="radio-inline">
                                            <input type="radio" name="categoria" id="optionsRadiosInline1"
                                                   value="cliente"
                                                <?php if ($usuario['categoria'] == 'cliente') { ?>
                                                    checked
                                                    <?php
                                                } ?>
                                            >Cliente</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="categoria" id="optionsRadiosInline2"
                                                   value="funcionario"
                                                <?php if ($usuario['categoria'] == 'funcionario') { ?>
                                                    checked
                                                    <?php
                                                } ?>
                                            >Funcionário</label>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="categoria" id="optionsRadiosInline2"
                                                   value="administrador"
                                                <?php if ($usuario['categoria'] == 'administrador') { ?>
                                                    checked
                                                    <?php
                                                } ?>
                                            >Administrador</label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="lista-usuarios.php"><button  style="float: left" type="button" class="btn btn-primary btn-lg">Voltar</button></a>
                        <button style="float: right" type="submit" class="btn btn-success btn-lg">Alterar</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

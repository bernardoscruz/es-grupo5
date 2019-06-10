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
    <form action="../../controllers/funcionarios/alterar-funcionario.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <h1 style="color: #b11016;" class="page-header">Alterar Funcionário</h1>
        <?php if (!empty($_GET['erro'])) {
            ?>
            <p class="alert alert-danger">Funcionário não pôde ser alterado.</p>
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
                            <input type="hidden" name="usuario_id" value="<?= $funcionario['usuario_id'] ?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome" value="<?= $funcionario['nome'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" value="<?= $funcionario['email'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cidade</label>
                                    <input class="form-control" name="cidade" value="<?= $funcionario['cidade'] ?>"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select required id="inputState" name="estado" class="form-control">
                                        <option  selected><?= $funcionario['estado'] ?></option>
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
                                    <label>CPF</label>
                                    <input value="<?= $funcionario['cpf'] ?>" type="text" name="cpf" class="form-control" onkeypress="mascara(this, '###.###.###-##')" placeholder="111.111.111-11" maxlength="14">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Salário</label>
                                    <input class="form-control" type="number" name="salario" value="<?= $funcionario['salario'] ?>"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Cargo</label>
                                    <select class="form-control" name="cargo">
                                        <option selected value="<?= $funcionario['cargo'] ?>"><?= $funcionario['cargo'] ?></option>
                                        <option value="vendedor">Vendedor</option>
                                        <option value="administrador">Administrador</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Número de identificação</label>
                                    <input class="form-control" name="numero_identificacao" type="number" value="<?= $funcionario['numero_identificacao'] ?>"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <a href="lista-funcionarios.php">
                    <button type="button" class="btn btn-primary btn-lg">Voltar</button>
                </a>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
            </div>
        </div>
    </form>
</div>

<script language="JavaScript">
    function mascara(t, mask)
    {
        var i = t.value.length;
        var saida = mask.substring(1,0);
        var texto = mask.substring(i)
        if (texto.substring(0,1) != saida)
        {
            t.value += texto.substring(0,1);
        }
    }
</script>
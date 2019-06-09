<?php
/**
 * Created by PhpStorm.
 * User: Usuário
 * Date: 08/06/2019
 * Time: 23:45
 */

include("../UserHeader.php");
include("../menu.php"); ?>

<div class="container">
    <h1 style="color: #b11016; text-align: center" class="page-header">Cadastro de Cliente</h1>
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
                <form method="post" action="../../controllers/clientes/cadastrar-cliente.php">
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
                            <label>Cidade</label>
                            <input class="form-control" name="cidade" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <select id="inputState" name="estado" class="form-control">
                                <option disabled selected>Escolha...</option>
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
                        <div class="form-group">
                            <label>Categoria</label><br/>
                            <label class="radio-inline">
                                <input type="radio" name="categoria" id="optionsRadiosInline1"
                                       value="cliente">Cliente</label>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="categoria" id="optionsRadiosInline2" value="funcionario">Funcionário</label>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="categoria" id="optionsRadiosInline2" value="administrador">Administrador</label>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>CNPJ</label>
                            <input type="text" name="cnpj" class="form-control"  onkeypress="mascara(this, '##.###.###/####-##')" placeholder="11.111.111/1111-11" maxlength="18">
                        </div>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

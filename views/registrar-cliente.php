<?php include("header.php") ?>

<script language="JavaScript">
    function mascara(t, mask)
    {
        let i = t.value.length;
        let saida = mask.substring(1,0);
        let texto = mask.substring(i);
        if (texto.substring(0,1) != saida)
        {
            t.value += texto.substring(0,1);
        }
    }
</script>

<div class="container">
    <h1 style="color: #b11016; text-align:center" class="page-header">Registre-se</h1>
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
                <form method="post" action="../verifica-registro.php">
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
                            <label>CNPJ</label>
                            <input onkeypress="mascara(this, '##.###.###/####-##')" class="form-control" name="cnpj" type="text" required>
                        </div>
                        <input hidden name="categoria" value="cliente">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h4 style="text-align: center">Ao se registrar você precisa ler nossos <strong>Termos e Condições</strong></h4>

    <div class="row panelMargin">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eveniet cum libero nisi neque inventore, quas pariatur maxime ipsa animi repudiandae eaque at consequuntur rerum nobis eius eligendi totam similique?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero magni laudantium illo consequatur, porro voluptas aliquid fugit cupiditate ea, sit quaerat? Repudiandae maiores quia rerum amet eos aperiam in. Quidem!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>

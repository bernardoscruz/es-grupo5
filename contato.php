<?php include("header.php"); ?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <fieldset>
                <div class="panel-body">
                    <div class="form-group" class="container">                        
                        <h1>Entre em contato</h1>

                        <form name="contatoform" method="post" action="enviarporemail.php">
                        <div class="form-group" form action="dadoscontatos.php" method="post" enctype="multipart/form-data">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="usuario_nome" size="30" maxlength="100"/></p>
                        </div>

                        <div class="form-group">
                            <label for="phone">Fone</label>
                            <input type="text" class="form-control" id="phone" name="usuario_phone" placeholder="(xx)xxxx-xxxx" /></p>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="usuario_email"placeholder="xxxx@mail.com" size="25" maxlength="100"/></p>
                        </div>

                        <div class="form-group">
                            <label for="subject"> Assunto </label>
                            <input type="text" class="form-control" id="subject" name="usuario_assunto"></p>
                        </div>

                        <div class="form-group">
                            <label for="mensage"> Mensagem </label><br>
                            <textarea cols="30" class="form-control" rows="7" id="mensage" name="usuario_mensage"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success">Enviar </button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>

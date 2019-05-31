<?php include("../UserHeader.php");
include("../../includes/connect.php");
include("../../includes/functions.php");
include("../menu.php");
$usuarios = listaUsuarios($connect);
?>
<div class="container">
	<h1 style="color:#b11016" class="page-header">Usuários</h1>
	<a href="loginCadastro.php"><button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">Cadastrar Usuário</button></a>
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
	                                <th>Categoria</th>
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
	                            	<td><?=$usuario['categoria']?></td>
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
<?php include("header.php");
include("includes/connect.php");
include("includes/functions.php"); 
include("menu.php");

if (isset($_GET['sort']))
    $sort = " order by ".$_GET['sort'];
else
    $sort = "";

$usuarios = listaClientes($connect, $sort);
?>
<div class="container">
	<h1 style="color:#b11016" class="page-header">Clientes</h1>
    <form method="get" action="lista-clientes.php">
	<a href="loginCadastro.php"><button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">Cadastrar Usuário</button></a>

        <a href="lista-clientes.php"><button style="background-color: #fff; color: #b11016" type="submit" class="btn btn-default navbar-btn">Ordenar</button></a>

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
		<p class="alert alert-success">Cliente alterado com sucesso.</p>
	<?php
	}
	if(!empty($_GET['excluido'])) {
	?>
		<p class="alert alert-success">Cliente excluído com sucesso.</p>
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
                                    <th>CNPJ</th>
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
                                    <td><?=$usuario['cnpj']?></td>
	                            	<td><?=$usuario['created_at']?></td>
	                            	<td><?=$usuario['updated_at']?></td>
									<td>
	                            		<form action="visualizar-usuario.php" method="get">
	                            			<input type="hidden" name="id" value="<?=$usuario['id']?>">
	                            			<button class="btn btn-primary"><p class="fa fa-search">Visualizar</p></button></td>
	                            		</form>
	                            	<td>
	                            	<td>
	                            		<form action="alterar-cliente.php" method="get">
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
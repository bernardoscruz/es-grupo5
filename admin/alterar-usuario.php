<?php include("header.php");
include("includes/connect.php");
include("includes/functions.php");
include("menu.php");
$usuario = buscaUsuarioPeloId($connect, $_GET['id']);
?>
<div class="container">
	<form action="atualizar-usuario.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$usuario['id']?>">
		<h1 style="color: #b11016;" class="page-header">Alterar Usuário</h1>
		<?php if(!empty($_GET['erro'])) {
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
									<input class="form-control" name="nome" value="<?=$usuario['nome']?>" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" value="<?=$usuario['email']?>" required>
								</div>
							</div>
							<div class="col-md-12">
							<div class="form-group">
									<label>Categoria</label><br/>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline1" value="cliente" 
										<?php if($usuario['categoria'] == 'cliente') { ?>
											checked
										<?php
										} ?>
										>Cliente</label>
									</label>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline2" value="funcionario" 
										<?php if($usuario['categoria'] == 'funcionario') { ?>
											checked
										<?php
										} ?>
										>Funcionário</label>
									</label>
									<label class="radio-inline">
										<input type="radio" name="categoria" id="optionsRadiosInline2" value="administrador" 
										<?php if($usuario['categoria'] == 'administrador') { ?>
											checked
										<?php
										} ?>
										>Administrador</label>
									</label>
								</div>
							</div>			
							</div>
							<div class="col-xs-6 col-md-6">
								<div class="form-group">
									<label>Criado em:</label>
									<input type="date" class="form-control" name="created_at" value="<?=$usuario['created_at']?>">
								</div>
							</div>
							<div class="col-xs-6 col-md-6">
								<div class="form-group">
									<label>Atualizado em:</label>
									<input type="date" class="form-control" name="updated_at" value="<?=$usuario['updated_at']?>">
								</div>
							</div>		
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-success btn-lg">Alterar</button>
			</div>
		</div>
	</form>
</div>
<?php // include("footer.php") ?>
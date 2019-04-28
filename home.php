<?php include("header.php"); 
include("admin/includes/connect.php");
function listaProdutos($connect) {
	$produtos = array();
	$result = mysqli_query($connect, "select id, valor_venda, nome, quantidade from produtos order by id desc limit 12");
	while($produto = mysqli_fetch_assoc($result)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}
$produtos = listaProdutos($connect);
?>
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
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<?php 
		$i = 1;
		foreach($produtos as $produto) :
			if ($i > 3) {
				break;
			}
			if ($i == 1) { ?>
				<a href="produto.php?id=<?=$produto['id']?>" class="item active">
			<?php 
			}
			else if ($i <= 3) { ?>
				<a href="produto.php?id=<?=$produto['id']?>" class="item">
			<?php
			} ?>
					<figure>
						<img class="img-responsive" src="admin/anexo/<?=$i?>.jpg">
					</figure>
					<figcaption>
						<div class="carousel-caption">
							<h3><?=$produto['nome']?></h3>
							<p class="tituloSlide">R$ <?=$produto['valor_venda']?>,00</p>
						</div>
					</figcaption>
				</a>
			<?php 
			$i++; 
			endforeach ?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<h2 class="highlights-title">Destaques</h2>

<div class="highlights thumb">
	<div class="row">
		<?php 
		$i = 1;
		foreach($produtos as $produto) : 
		if ($i > 3) { ?>
			<div class="thumb col-xs-12 col-md-4">
				<a href="produto.php?id=<?=$produto['id']?>" class="thumbnail">
					<figure>
						<img class="img-circle img-responsive" src="admin/anexo/<?=$i?>.jpg">
					</figure>
					<figcaption>
						<div class="caption">
							<h3><?=$produto['nome']?></h3>
							<p>R$ <?=$produto['valor_venda']?>,00</p>
						</div>
					</figcaption>
				</a>
			</div>
		<?php
		}
		$i++;
		endforeach ?>
	</div>
</div>
<?php include("footer.php"); ?>
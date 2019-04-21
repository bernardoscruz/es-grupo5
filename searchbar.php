<?php 
function listaTipo($connect) {
	$tipos = array();
	$result = mysqli_query($connect, "select * from tipo");
	while($tipo = mysqli_fetch_assoc($result)) {
		array_push($tipos, $tipo);
	}
	return $tipos;
}
function listaQuartos($connect) {
	$quartos = array();
	$result = mysqli_query($connect, "select quartos from imovel group by quartos order by quartos");
	while($quarto = mysqli_fetch_assoc($result)) {
		array_push($quartos, $quarto);
	}
	return $quartos;
}
function maxQuartos($connect){
	$result = mysqli_query($connect, "select quartos from imovel order by quartos desc limit 1");
	return mysqli_fetch_assoc($result);
}
$tipos = listaTipo($connect);
$quartos = listaQuartos($connect);
$maxQuartos = maxQuartos($connect);
?>
<div class="places">
	<div class="container search">
		<h2>Imóveis</h2>
		<form action="imoveis.php?busca=true" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div class="form-group">
						<label for="Immobile type">Tipo de imóvel: </label>
						<select name="tipo_id" class="form-control"> 
							<?php foreach($tipos as $tipo) :?>
								<option value="<?=$tipo['id']?>"><?=$tipo['nome']?></option><br/>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="form-group">
						<label for="Immobile type">Finalidade: </label>
						<select name="finalidade" class="form-control"> 
							<option value="Comprar">Comprar</option>
							<option value="Alugar">Alugar</option>
						</select>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<label for="exampleInputAmount">Faixa de preço:</label>
						<div class="input-group">
							<div class="input-group-addon">R$</div>
							<input type="number" class="form-control" id="exampleInputAmount" placeholder="De..." name="valorMin">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
						<label for="exampleInputAmount">&emsp;</label>
						<div class="input-group">
							<div class="input-group-addon">R$</div>
							<input type="number" class="form-control" id="exampleInputAmount" placeholder="Até..." name="valorMax">
							<div class="input-group-addon">.00</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2">
					<div class="form-group">
						<label for="input-bedrooms">Número de quartos:</label>
						<select name="minQuartos" class="form-control"> 
							<option value="0">De...</option><br/>
							<?php foreach($quartos as $quarto) :?>
							<option value="<?=$quarto['quartos']?>"><?=$quarto['quartos']?></option><br/>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2">
					<div class="form-group">
						<label for="input-bedrooms">&emsp;</label>
						<select name="maxQuartos" class="form-control">
							<option value="<?=$maxQuartos['quartos']?>">Até...</option><br/> 
							<?php foreach($quartos as $quarto) :?>
							<option value="<?=$quarto['quartos']?>"><?=$quarto['quartos']?></option><br/>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="form-group">
						<label for="input-bedrooms">Bairro:</label>
						<input type="text" class="form-control" name="bairro">
					</div>
				</div>
				<div class="col-xs-12 col-sm-2">
					<div class="form-group">
						<label for="input-bedrooms">Código:</label>
						<input type="text" class="form-control" name="id">
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="form-group">
						<button type="submit" class="btn btn-default" name="procurar">Procurar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
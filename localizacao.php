<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Localização</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="publico/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="publico/css/estilo.css">
</head>

<?php
    include "header.php";
?>

<div class="location">
	<div id="wrap">	
		<div id="main" class="container clear-top">
			<h1>Localização</h1>
			<p><b>Rua Fulano de Tal - 788</b></p>
			<p><b>Bairro Normal - Juiz de Fora</b></p>
			<div class="row">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14820.51949664021!2d-43.32462785!3d-21.775234!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1495583142817" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>		    	
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); 
?>
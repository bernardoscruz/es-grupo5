<!DOCTYPE html>
<html>
	<head>
		<title>Lojão do seu Zé</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<a href="home.php"><img class="img-responsive logo" src="img/logo.png" alt="logo"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-links" aria-expanded="false">
			 			<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbar-links">		
						<ul class="nav navbar-nav">
							<li>
								<a href="home.php"><button type="button" class="btn btn-default navbar-btn">Home <p class="fa fa-shopping-cart"></p></button></a>
							</li>
							<li>
								<a href="quemSomos.php"><button type="button" class="btn btn-default navbar-btn">Quem Somos <p class="fa fa-info-circle"></p></button></a>
							</li>
							<li>
								<a href="contato.php"><button type="button" class="btn btn-default navbar-btn">Contato <p class="fa fa-envelope"></p></button></a>
							</li>
							<li>
								<a href="localizacao.php"><button type="button" class="btn btn-default navbar-btn">Localização <p class="fa fa-compass"></p></button></a>
							</li>
							<?php if(isset($_GET['usuario']))
									{
										?> 
										<li>
											<a href="produtos.php"><button type="button" class="btn btn-default navbar-btn">Produtos <p class="fa fa-tags"></p> </button></a>
										</li>
										<li>
										<a href="home.php"><button style="background-color: #fff; color: #b11016" type="button" class="btn btn-default navbar-btn">Logout <p class="fa fa-user"></p></button></a>
										</li>
											
									<?php }
									else {
										?><li>
										<a href="login.php"><button type="button" class="btn btn-default navbar-btn">Login <p class="fa fa-user"></p></button></a>
										</li>
									<?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>
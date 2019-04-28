<!DOCTYPE html>
<html>
<head>
	<title>Enviar Email</title>
</head>
<body>

<?php 
	$nome= $_POST ['usuario_nome'];
	$phone= $_POST ['usuario_phone'];
	$email= $_POST ['usuario_email'];
	$subject= $_POST ['usuario_assunto'];
	$mensage= $_POST ['usuario_mensage'];
 ?>


<?php 
$to = "seuze@gmail.com";
$subject = "$subject";
$mensage = "<strong> Nome: </strong> $nome <br> <strong> Telefone: </strong> $phone <br> <strong> Email: </strong> $email <br> <strong> Assunto: </strong> $subject <strong> Mensagem: </strong> $mensage <br>";
$header = "MINE-Version: 1.0\n";
$header = "Content-tupe: tect/html; chaeset=iso-8859-1\n";
$header = "From: $email\n";
mail ($to, $subject, $mensage, $header);
echo "Mensagem enviada com sucesso!";
 ?>



</body>
</html>












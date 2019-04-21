<?php 
function listaImoveis($connect) {
	$imoveis = array();
	$result = mysqli_query($connect, "select imovel.id, tipo.nome, valor, bairro, logradouro, numero, complemento, banheiros, quartos, tamanho, finalidade from imovel inner join tipo on imovel.tipo_id = tipo.id order by id desc");
	while($imovel = mysqli_fetch_assoc($result)) {
		array_push($imoveis, $imovel);
	}
	return $imoveis;
}

function excluirImovel($conexao, $id) {
	$query = "delete from imovel where id = {$id}";
	return mysqli_query($conexao, $query);
}

function listaTipo($connect) {
	$tipos = array();
	$result = mysqli_query($connect, "select * from tipo");
	while($tipo = mysqli_fetch_assoc($result)) {
		array_push($tipos, $tipo);
	}
	return $tipos;
}

function cadastraImovel($connect, $tipo_id, $valor, $bairro, $logradouro, $numero, $complemento, $banheiros, $quartos, $tamanho, $descricao, $finalidade, $nomefoto) {
	$query = "insert into imovel (tipo_id, valor, bairro, logradouro, numero, complemento, banheiros, quartos, tamanho, descricao, finalidade, nomefoto) values ('{$tipo_id}', '{$valor}', '{$bairro}', '{$logradouro}', '{$numero}', '{$complemento}', '{$banheiros}', '{$quartos}', '{$tamanho}', '{$descricao}', '{$finalidade}', '{$nomefoto}')";
	$result = mysqli_query($connect, $query);
	return $result;
}

function buscaImovel($connect, $id){
	$result = mysqli_query($connect, "select * from imovel where id = '{$id}'");
	return mysqli_fetch_assoc($result);
}

function alterarImovel($connect, $tipo_id, $valor, $bairro, $logradouro, $numero, $complemento, $banheiros, $quartos, $tamanho, $descricao, $finalidade, $nomefoto, $id) {
	$query = "update imovel set tipo_id = '{$tipo_id}', valor = '{$valor}', bairro = '{$bairro}', logradouro = '{$logradouro}', numero = '{$numero}', complemento = '{$complemento}', banheiros = '{$banheiros}', quartos = '{$quartos}', tamanho = '{$tamanho}', descricao = '{$descricao}', finalidade = '{$finalidade}', nomefoto = '{$nomefoto}' where id = '{$id}'";
	$result = mysqli_query($connect, $query);
	return $result;
}

function insereTipo($connect, $nome)
{

  $query = "insert into tipo (nome) values ('{$nome}')";
  $resultadoDaInsercao = mysqli_query($connect, $query);
  return $resultadoDaInsercao;
}

function listaTiposDeImovel($connect) {
    $tipos = array();
    $resultado = mysqli_query($connect, "select * from tipo");

    while($tipo = mysqli_fetch_assoc($resultado)) {
        array_push($tipos, $tipo);
    }

    return $tipos;
}

function removeTipo($connect, $id)
 {
 	$query = "delete from tipo where id = {$id}";
  return mysqli_query($connect, $query);
 }

function buscaTipo($connect, $id)                        
{
 $query = "select * from tipo where id = '{$id}'";
 $resultado = mysqli_query($connect, $query);
 return mysqli_fetch_assoc($resultado);
}

function alteraTipo($connect, $id, $nome)
{
 $query = "update tipo set nome = '{$nome}' where id = '{$id}'";
 return mysqli_query($connect, $query);
}

function cadastraUsuario($connect, $login, $senha) {
	$senhaMd5 = md5($senha);
	$query = "insert into usuario (login, senha) values ('{$login}', '{$senhaMd5}')";
	$result = mysqli_query($connect, $query);
	return $result;
}

function buscaUsuario($connect, $login, $senha) {
    $senhaMd5 = md5($senha);
    $result = mysqli_query($connect, "select * from usuario where login = '{$login}' and senha = '{$senhaMd5}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

function buscaLogin($connect, $login) {
    $result = mysqli_query($connect, "select * from usuario where login = '{$login}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}
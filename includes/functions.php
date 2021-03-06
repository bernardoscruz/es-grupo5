<?php
/**
 * @param $connect
 * @return array
 */
function listaUsuarios($connect) {
	$usuarios = array();
	$result = mysqli_query($connect, "select * from funcionarios order by nome asc");
	while($usuario = mysqli_fetch_assoc($result)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}

/**
 * @param $conexao
 * @param $id
 * @param $categoria
 * @return bool
 */
function excluirUsuario($conexao, $id, $categoria) {
    $deleted_from_subclass = false;
    if($categoria == "cliente") {
        $query = "delete from clientes where id = {$id}";
        $deleted_from_subclass = mysqli_query($conexao, $query);
    }

	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query) && $deleted_from_subclass;
}

/**
 * @param $connect
 * @param $id
 * @return array|null
 */
function buscaUsuarioPeloId($connect, $id){
	$result = mysqli_query($connect, "select * from usuarios where id = '{$id}'");
	return mysqli_fetch_assoc($result);
}

/**
 * @param $connect
 * @param $id
 * @param $nome
 * @param $email
 * @param $categoria
 * @param $createdAt
 * @param $updatedAt
 * @return bool|mysqli_result
 */
function alterarUsuario($connect, $id, $nome, $email, $categoria, $createdAt, $updatedAt) {
	$query = "update usuarios set nome = '{$nome}', email = '{$email}', categoria = '{$categoria}' where id = '{$id}'";
	$result = mysqli_query($connect, $query);
	return $result;
}

/**
 * @param $connect
 * @param $nome
 * @param $email
 * @param $senha
 * @param $categoria
 * @param $cidade
 * @param $estado
 * @return bool|mysqli_result
 */
function cadastraUsuario($connect, $nome, $email, $senha,  $categoria, $cidade, $estado) {
    $senhaMd5 = md5($senha);
    $query = "insert into usuarios (nome, email, senha, categoria, cidade, estado) values ('{$nome}','{$email}', '{$senhaMd5}','{$categoria}', '{$cidade}', '{$estado}')";
    $result = mysqli_query($connect, $query);
    return $result;
}

/**
 * @param $connect
 * @param $email
 * @param $senha
 * @return array|null
 */
function buscaUsuario($connect, $email, $senha) {
	$senhaMd5 = md5($senha);
	$result = mysqli_query($connect, "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

/**
 * @param $connect
 * @param $email
 * @return array|null
 */
function buscaLogin($connect, $email)
{
    $result = mysqli_query($connect, "select * from usuarios where email = '{$email}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

/**
 * @param $connect
 * @param $id
 * @return array|null
 */
function buscaClientePeloId($connect, $id){
    $result = mysqli_query($connect, "select * from clientes where id = '{$id}'");
    return mysqli_fetch_assoc($result);
}



<?php 
function listaUsuarios($connect) {
	$usuarios = array();
	$result = mysqli_query($connect, "select id, nome, email, categoria, created_at, updated_at from usuarios order by nome asc");
	while($usuario = mysqli_fetch_assoc($result)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}

function excluirUsuario($conexao, $id, $categoria) {
    $deleted_from_subclass = false;
    if($categoria == "cliente") {
        $query = "delete from clientes where id = {$id}";
        $deleted_from_subclass = mysqli_query($conexao, $query);
    }

	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query) && $deleted_from_subclass;
}

function buscaUsuarioPeloId($connect, $id){
	$result = mysqli_query($connect, "select * from usuarios where id = '{$id}'");
	return mysqli_fetch_assoc($result);
}

function alterarUsuario($connect, $id, $nome, $email, $categoria, $createdAt, $updatedAt) {
	$query = "update usuarios set nome = '{$nome}', email = '{$email}', categoria = '{$categoria}' where id = '{$id}'";
	$result = mysqli_query($connect, $query);
	return $result;
}

function cadastraUsuario($connect, $nome, $email, $senha,  $categoria, $cidade, $estado) {
    $senhaMd5 = md5($senha);
    $query = "insert into usuarios (nome, email, senha, categoria, cidade, estado) values ('{$nome}','{$email}', '{$senhaMd5}','{$categoria}', '{$cidade}', '{$estado}')";
    $result = mysqli_query($connect, $query);
    return $result;
}

function alterarCliente($connect, $id, $nome, $email, $cidade, $estado, $cnpj, $createdAt, $updatedAt) {
    $query1 = "update usuarios set nome = '{$nome}', email = '{$email}', cidade = '{$cidade}', estado = '{$estado}' where id = '{$id}'";
    $query2 = "update clientes set cnpj = '{$cnpj}' where id = '{$id}'";
    $result = mysqli_query($connect, $query1) && mysqli_query($connect, $query2);
    return $result;
}

function cadastraCliente($connect, $email, $cnpj)
{
    $query = "select id from usuarios where email = '{$email}'";
    $result = mysqli_query($connect, $query);
    $id =  mysqli_fetch_assoc($result);
    $query = "insert into clientes (id, cnpj) values ('{$id['id']}', '{$cnpj}')";
    $result = mysqli_query($connect, $query);
    return $result;
}

function buscaUsuario($connect, $email, $senha) {
	$senhaMd5 = md5($senha);
	$result = mysqli_query($connect, "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

function buscaLogin($connect, $email) {
    $result = mysqli_query($connect, "select * from usuarios where email = '{$email}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

///funcoes do cliente

function listaClientes($connect, $sort) {
    $usuarios = array();
    $query = "select usuarios.id, usuarios.nome, usuarios.email, usuarios.categoria, usuarios.created_at, usuarios.updated_at, usuarios.cidade, usuarios.estado, clientes.cnpj
      from usuarios inner join clientes on usuarios.id = clientes.id";
    $query = $query.$sort;
    $result = mysqli_query($connect, $query);
    while($usuario = mysqli_fetch_assoc($result)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

function buscaClientePeloId($connect, $id){
    $result = mysqli_query($connect, "select * from clientes where id = '{$id}'");
    return mysqli_fetch_assoc($result);
}


/// Funções funcionário
function listaFuncionarios($connect, $sort) {
    $usuarios = array();
    $query = "select usuarios.id, usuarios.nome, usuarios.email, usuarios.categoria, usuarios.created_at, usuarios.updated_at,
               usuarios.cidade, usuarios.estado, funcionarios.cpf, funcionarios.numIdentificacao, funcionarios.salario, 
      from usuarios inner join funcionarios on usuarios.id = funcionarios.id";
    $query = $query.$sort;
    $result = mysqli_query($connect, $query);
    while($usuario = mysqli_fetch_assoc($result)) {
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}


function cadastraFuncionario($connect, $email, $cpf, $numIdentificacao, $salario)
{
    $query = "select id from usuarios where email = '{$email}'";
    $result = mysqli_query($connect, $query);
    $id =  mysqli_fetch_assoc($result);
    $query = "insert into clientes (id, cpf, numIdentificacao, salario) values ('{$id['id']}', '{$cpf}', '{$numIdentificacao}', '{$salario}')";
    $result = mysqli_query($connect, $query);
    return $result;
}
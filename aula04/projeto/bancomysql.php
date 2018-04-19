<?php 
	

	
	function conectar(){
		$host = "localhost";
		$dbname = "aula03";
		$dbuser = "hamilton";
		$dbpassmysql = "@da4linux";
		return mysqli_connect($host,$dbuser,$dbpassmysql,$dbname);
	}

function inserir(string $tabela, array $dados)
{
	foreach ($dados as $campo => $valor) {
		$campos[]  = $campo;
		$valores[] = "'{$valor}'";
	}

	$campos = implode(',', $campos);
	$valores = implode(',', $valores);

	$query = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";

	$con = conectar();
	mysqli_query($con,$query);
}

function editar(string $tabela, array $dados, string $onde)
{
	foreach ($dados as $campo => $valor) {
		$sets[] = "{$campo}='{$valor}'"; 
	}

	$sets = implode(',', $sets);

	$query = "UPDATE {$tabela} SET {$sets} WHERE {$onde}";

	$con = conectar();
	mysqli_query($con,$query);
}


function deletar(string $tabela, string $onde)
{
	$query = "DELETE FROM {$tabela} WHERE {$onde}";

	$con = conectar();
	mysqli_query($con,$query);
}


function buscar(string $tabela, string $campos = '*', string $onde)
{
	$query = "SELECT {$campos} FROM {$tabela} WHERE {$onde}";
	$con = conecta();
	$result = $pg_query($con,$query);
	return mysqli_fetch_assoc($result);
}

function buscarTodos(
	string $tabela, 
	string $campos = '*', 
	string $onde = null, 
	string $filtro = null, 
	string $ordem = null,
	int $limite = null)
{
	$query = "SELECT {$campos} FROM {$tabela}";

	if ($onde) {
		$query .= " WHERE {$onde}";
	}

	if ($filtro && $onde) {
		$query .= " AND {$filtro}";
	}

	if ($ordem) {
		$query .= " ORDER BY {$ordem}";
	}

	if ($limite) {
		$query .= " LIMIT {$limite}";
	}
	$con = conectar();
	$result = mysqli_query($con,$query);
	return mysqli_fetch_all($result,MYSQLI_ASSOC);

}

//buscarTodos('usuarios',null,null,null,'id',3);
?>
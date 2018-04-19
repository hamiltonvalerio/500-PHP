<?php 
	

	
	function conectar(){
		$host = "localhost";
		$port = "5432";
		$dbname = "aula03";
		$dbuser = "hamilton";
		$dbpasspostgres = "123";
		return pg_connect("host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpasspostgres}");
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
		return pg_query($con,$query);
	}

	function editar(string $tabela, array $dados, string $onde)
	{
		foreach ($dados as $campo => $valor) {
			$sets[] = "{$campo}='{$valor}'"; 
		}

		$sets = implode(',', $sets);

		$query = "UPDATE {$tabela} SET {$sets} WHERE {$onde}";

		$con = conectar();
		return pg_query($con,$query);
	}


	function deletar(string $tabela, string $onde)
	{
		$query = "DELETE FROM {$tabela} WHERE {$onde}";

		$con = conectar();
		pg_query($con,$query);
	}


	function buscar(string $tabela, string $campos = '*', string $onde)
	{
		$query = "SELECT {$campos} FROM {$tabela} WHERE {$onde}";
		$con = conectar();
		$result = pg_query($con,$query);
		return pg_fetch_assoc($result);
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
		$result = pg_query($con,$query);
		return pg_fetch_all($result);
	}

//buscarTodos('usuarios',null,null,null,'id',3);
?>
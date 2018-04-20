<?php 

	function conectar(){
		$host = "localhost";
		$port = "5432";
		$dbname = "blog";
		$dbuser = "hamilton";
		$dbpasspostgres = "123";
		return pg_connect("host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpasspostgres}");
	}

 ?>
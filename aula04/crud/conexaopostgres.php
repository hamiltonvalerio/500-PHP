<?php 

	$host = "localhost";
	$port = "5432";
	$dbname = "aula03";
	$dbuser = "hamilton";
	$dbpass = "123";
	$conString = "host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpass}";
	$conPostgres = pg_connect($conString);

 ?>
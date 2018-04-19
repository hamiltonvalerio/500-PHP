<?php 

	require 'postgres.php';

	//var_dump($con);

	$email = 'oliver@valerio.eti.br';
	$senha = '123';

	$emailteste = 'oliv';

	$query = "INSERT INTO usuarios(email, senha) VALUES ('$email','$senha')";
	$query2 = "SELECT * FROM usuarios ";

	$result = pg_query($con,$query2);
	echo $result ? "ok" : "falha";
	echo "<br>";
	$dados = pg_fetch_all($result);
	//print_r($dados);
	foreach ($dados as $value) {
		echo $value['email']. '<br>';
	}


 ?>
<?php 

	require 'mysql.php';

	//var_dump($con);

	$email = 'valentina@valerio.eti.br';
	$senha = '123';

	$emailteste = 'oliv';

	$query = "INSERT INTO usuarios(email, senha) VALUES ('$email','$senha')";
	$query2 = "SELECT * FROM usuarios ";

	$result = mysqli_query($con,$query2);
	echo $result ? "ok" : "falha";
	echo "<br>";
	print_r($result);
	$dados = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//$dados = mysqli_fetch_assoc($result); //1registro
	//print_r($dados);
	foreach ($dados as $value) {
		echo $value['email']. '<br>';
	}


 ?>
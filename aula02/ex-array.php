<?php 
	
	echo '<pre>';

	// array $pessoa -> NOme, Idade e Email;
	// Exibir na tela o conteudo de cada informação seguindo o exemple
	//Meu nome é
	//tenho x anos
	//Meu email é

	//Array Pessoas onde teremos 3 pessoa
	//cada pessoa possui nome, idade e email
	// Exibir na tela o conteudo de cada informação seguindo o exemple
	//Meu nome é
	//tenho x anos
	//Meu email é

	
	$pessoa = ['nome' => 'Hamilton', 'idade' => 40, 'email' => 'hamilton@valerio.eti.br'];
	echo "Meu nome é ".$pessoa['nome'].' ,tenho '.$pessoa['idade'].' e meu email eh '.$pessoa['email']."\n";
	print_r($pessoa);

	$pessoas = [
		['nome' => 'Hamilton', 'idade' => 40, 'email' => 'hamilton@valerio.eti.br'],
		['nome' => 'Valentina', 'idade' => 0, 'email' => 'valentina@valerio.eti.br'],
		['nome' => 'Oliver', 'idade' => 10, 'email' => 'oliver@valerio.eti.br']
	];
	
	print_r($pessoas);

	 foreach ($pessoas as $pessoa) {
	 	echo 'Meu nome é '.$pessoa['nome'].' ,tenho '.$pessoa['idade'].' e meu email eh '.$pessoa['email']."\n";
	 }
 ?>
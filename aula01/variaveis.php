<?php 
	//criando variaveis
	$nome = "Hamilton";
	$idade = 40;

	//constante
	define(PI, 3.141516);

	echo $nome;
	echo '<hr>';
	echo $idade;
	echo "<hr>";
	echo '<pre>';
	var_dump($idade);
	echo "<hr>";
	$variavel = 'carro';
	$$variavel = 'fusca';
	$$$variavel = 'velho';
	echo $fusca;
	echo "<hr>";
	echo "CONSTANTE";
	echo "<br>";
	echo PI;
	echo "<br>";
	const VERSAO = 1.0;
	echo VERSAO;
	echo "<hr>";
	echo "STRING\n";
	//echo "<br>";
	echo "Meu nome é {$nome} e minha idade é ".$idade;
	$heredoc = "teste";
	
	$texto = <<< TXT
	teste de texto 
	$heredoc aqui;
TXT;

	echo $texto;
//var_dump($texto);
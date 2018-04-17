<?php 

	function parimpar(int $num){

		if(($num % 2)==0){
			return "\n".'par'."\n";
		}else{
			return "\n".'impar'."\n";
		}

	}

	$valor = parimpar(readline('Digite um numero: '));
	echo $valor;

	function idade(int $idade){
		if($idade >= 18){
			return "\n".'Maior de idade'."\n";
		}else{
			return "\n".'Menor de idade'."\n";
		}
	}

	$valor = idade(readline('Digite uma idade: '));
	echo $valor;

	function maior(int $num1, int $num2){
		if($num1 > $num2){
			return "\n".$num1.' maior que '.$num2."\n";
		}else if($num1 < $num2){
			return "\n".$num2.' maior que '.$num1."\n";
		}else{
			return "igual";
		}
	}

	$valor = maior(readline('Digite um numero: '),readline('Digite outro numero: '));
	echo $valor;

	function idadeHabilitacao(int $idade, $temHabilitacao){
		if(($idade >= 18) && ($temHabilitacao==true)){
			return "\n".'Pode dirigir'."\n";
		}else{
			return "\n".'Nao pode dirigir'."\n";
		}
	}

	$valor = idadeHabilitacao(readline('Digite a idade: '), readline('Tem habilitacao: '));
	echo $valor;

	$server = `ls -la`;
	echo $server;
 ?>
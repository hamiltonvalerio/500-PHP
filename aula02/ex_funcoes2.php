<?php 
	

	function geraArray(int $valor){
		$array = [];
		for ($i=0; $i < $valor; $i++) { 
			$array[$i] = rand(0,$valor);
		}
		return $array;
	}

	$numero = readline('Digite uma valor: ');

	$arrayValores = geraArray($numero);
	//imprime o array bruto
	print_r($arrayValores);

	echo "\n";
	//imprime separado por virgula
	foreach ($arrayValores as $valor) {
		echo $valor.',';
	}

	echo "\n";
	//imprime o primeiro valor
	echo 'Primeiro Valor: '.$arrayValores[0];
	
	echo "\n";
	//imprime o ultimo valor
	echo 'Último Valor: '.$arrayValores[$numero-1];

	echo "\nPares: ";
	//imprime os numeros pares separados por virgula
	foreach ($arrayValores as $valor) {
		if(($valor%2)==0){
			echo $valor.',';
		}
	}

	echo "\nImpares: ";
	//imprime os numeros impares separados por virgula
	foreach ($arrayValores as $valor) {
		if(($valor%2)!=0){
			echo $valor.',';
		}
	}

	echo "\n";
	//o maior numero
	$num1 = 0;
	$num2 = 0;
	for ($i=0; $i < $numero; $i++) { 
		for ($j=0; $j < $numero; $j++) { 
			if($arrayValores[$i] > $arrayValores[$j]){
				$num1 = $arrayValores[$i];
			}
			
		}
		if($num1 > $num2){
			$num2 = $num1;
		} 
	}
	echo 'Maior:'.$num2;
	
	echo "\n";
	//o menor numero
	$menor = $arrayValores[0]; 
	foreach ($arrayValores as $value) {
		if($menor > $value){
			$menor = $value;
		}
	}
	echo 'Menor:'.$menor;
	echo "\n";
	echo strlen('téste');
 ?>
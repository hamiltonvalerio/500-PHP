<?php 
	echo '----------';
	echo "\n";
	echo '-0 - Soma-';
	echo "\n";
	echo '-1 - Subt-';
	echo "\n";
	echo '-2 - Mult-';
	echo "\n";
	echo '-3 - Divi-';
	echo "\n";
	$opcao = readline('Escolha uma opcao: ');

	switch ($opcao) {
		case 0:
			$num1 = readline('Primeiro Numero: ');
			$num2 = readline('Segundo Numero: ');
			echo 'Soma: '.($num1+$num2);
			echo "\n";
			break;
		case 1:
			$num1 = readline('Primeiro Numero: ');
			$num2 = readline('Segundo Numero: ');
			echo 'Subt: '.($num1-$num2);
			echo "\n";
			break;
		case 2:
			$num1 = readline('Primeiro Numero: ');
			$num2 = readline('Segundo Numero: ');
			echo 'MUlt: '.($num1*$num2);
			echo "\n";
			break;
		case 3:
			$num1 = readline('Primeiro Numero: ');
			$num2 = readline('Segundo Numero: ');
			echo 'Divi: '.($num1/$num2);
			echo "\n";
			break;
		default:
			echo 'errou';
			echo "\n";
			break;
	}

	//---------------------

	

 ?>
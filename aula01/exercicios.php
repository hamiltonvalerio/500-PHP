<?php 

	$n1 = readline('Primeiro Numero: ');
	$n2 = readline('Segundo Numero: ');

	if($n1 > $n2){
		echo $n1." > ".$n2."\n";
	}else if($n2 > $n1){
		echo $n2." > ".$n1."\n";
	}else{
		echo "igual\n";
	}

	$n1 = readline('Digite um numero: ');
	if(($n1%2) == 0){
		echo "PAR\n";
	}else{
		echo "IMPAR\n";
	}
 ?>
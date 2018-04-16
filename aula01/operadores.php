<<?php 
	$num1 = readline('Digite o primeiro numero: ');
	$num2 = readline('Digite o segundo numero: ');
	echo "soma\n";
	$num1 += $num2;
	echo $num1;
	echo "\nsubtracao\n";
	echo $num1 - $num2;
	echo "\ndivisao\n";
	echo $num1 / $num2;
	echo "\nmultiplicacao\n";
	echo $num1 * $num2;
	echo "\n++incemento\n";
	$num = 1;
	echo ++$num;
	echo "\nincemento++\n";
	$num = 1;
	echo ++$num;
 ?>
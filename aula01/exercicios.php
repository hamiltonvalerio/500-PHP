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

	/*
	-Crie três variáveis e atribua valores à elas: salario(float), tempoServico(int) e temReclamacoes(boolean);
	-Para ser promovido, vamos verificar Se salario maior ou igual a 1000, Se o tempo de serviço é maior ou igual a 12 meses e Se não tem reclamações;
	-Caso tudo seja verdadeiro, mostre Parabéns, você foi promovido;
	*/
	$salario = readline('SALARIO: ');
	$tempoServico = readline('TEMPO SERVICO: (MESES): ');
	$temReclamacoes = readline('TEM RECLAMACAO (S) (N): ');
	 if ($salario >= 1000 && $tempoServico >= 12 && $temReclamacoes == 'N') {
	 	echo "\n PROMOVIDO\n";
	 }else{
	 	echo "\n NAO PROMOVIDO\n";
	 }


	 /*

    Crie duas variáveis nota e frequencia e atribua valores a elas;
    Monte uma estrutura que analise as duas variáveis e seguindo a seguinte condição imprima algo na tela;

        Se nota maior ou igual a 7 e frequencia maior ou igual a 8 -> Imprima aprovado;
        Se nota maior ou igual a 5 ou nota menor que 7 e frequencia maior ou igual a 8 -> Imprima recuperação;
        Se nota menor que 5 ou frequencia menor que 8 -> Imprima reprovado;

	*/
	$nota = readline('NOTA: ');
	$frequencia = readline('FREQUENCIA: ');

	if($nota >= 7 && $frequencia >= 8){
		echo "\nAPROVADO\n";
	}else if(($nota >= 5 || $nota <= 7) && $frequencia >= 8){
		echo "\nRECUPERACAO\n";
	}else if ($nota < 5 || $frequencia < 8) {
		echo "\nREPROVADO\n";
	}


	/*
    Utilize o exemplo do exercício anterior e monte a estrutura utilizando SWITCH e CASE;
	*/

	switch (true) {
		case $nota >= 7 && $frequencia >= 8:
			echo "\nAPROVADO\n";
			break;
		
		case ($nota >= 5 || $nota <= 7) && $frequencia >= 8:
			echo "\nRECUPERACAO\n";
			break;

		case $nota < 5 || $frequencia < 8:
			echo "\nREPROVADO\n";
			break;
		
		default:
			# code...
			break;
	}

	$num = 0;
	while ($num <= 10) {
		echo $num++."\n";
	}

	$num = 0;
	while ($num <= 20) {
		if(($num%2)==0){
			echo "PAR: ".$num."\n";	
		}
		$num++;
	}
	$num = 0;
	while ($num <= 20) {
		if(($num%2)!=0){
			echo "IMPAR: ".$num."\n";	
		}
		$num++;
	}	
 ?>
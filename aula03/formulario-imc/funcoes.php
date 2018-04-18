<?php 

	
	function retornaImc($peso, $altura){
		$imc = $peso / ($altura * $altura);
		switch (true) {
			case $imc<17:
				return 'Muito abaixo do peso';
				break;
			case $imc>=17 && $imc<=18.49:
				return 'Abaixo do peso';
				break;
			case $imc>=18.5 && $imc<=24.99:
				return 'Peso normal';
				break;
			case $imc>=25 && $imc<=29.99:
				return 'IMC: '.$imc.' Acima do peso';
				break;
			case $imc>=30 && $imc<=34.99:
				return 'Obesidade I';
				break;
			case $imc>=35 && $imc<=39.99:
				return 'Obesidade II (severa)';
				break;
			case $imc>40:
				return 'Obesidade III (mórbida)';
				break;

			default:
				# code...
				break;
		}
		
	}

 ?>
<?php 
	
	$numero = 10;
	function negrito($texto = ''){
		global $numero;
		echo $numero;
		echo '<strong>'.$texto.'</strong>';
	}

	function soma(int $num1,int $num2){
		echo $num1+$num2;
	}

	negrito('teste');
	echo '<hr>';
	$tes = 50;
	soma($tes,50);
	echo '<hr>';
	function adicionar(&$fruta){
		++$fruta;
	}

	$laranjas = 5;
	++$laranjas;
	adicionar($laranjas);
	echo $laranjas;

 ?>
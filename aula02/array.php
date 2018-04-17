<?php  
	echo '<pre>';
	$temperaturas = [
		'2017' => [
			'Janeiro' 	=> 28,
			'Fevereiro'	=> 30
		],
		'2018' => [
			'Janeiro' 	=> 32,
			'Fevereiro'	=> 27
		]
	];

	$pessoa = ['nome' => 'Hamilton', 'idade' => 40];

print_r($temperaturas);



echo $temperaturas['2018']['Janeiro'];
echo '<hr>';

foreach ($pessoa as $key => $value) {
	echo $key.'-'.$value."\n";
}
echo '<hr>';

foreach ($temperaturas as $key => $value) {
	echo $value['Janeiro']."\n";
}

?>
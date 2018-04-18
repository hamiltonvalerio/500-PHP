<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>
<div>
	<form action="" method="Post">
		<p>Número 1: <input type="number" name="num1"></p>
		<p>Número 2: <input type="number" name="num2"></p>
		<input type="reset" >
		<input type="submit" value="enviar" >
	</form>
</div>

</body>
</html>

<?php  
	if(!empty($_POST)){
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		echo "<br>";
		echo "<br>";
		echo 'SOMA: '.($num1+$num2).'<br>';
		echo 'SUBT: '.($num1-$num2).'<br>';
		echo 'MULT: '.($num1*$num2).'<br>';
		echo 'DIVI: '.($num1/$num2).'<br>';
	}
?>

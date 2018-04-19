<?php 

	$host = "localhost";
	//$port = "5432";
	$dbname = "aula03";
	$dbuser = "hamilton";
	$dbpass = "@da4linux";

	$con = mysqli_connect($host,$dbuser,$dbpass,$dbname);

	echo '<pre>';
	//var_dump($con);

 ?>
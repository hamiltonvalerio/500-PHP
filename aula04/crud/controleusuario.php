<?php 

	require 'conexaopostgres.php';
	require 'conexaomysql.php';

 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body {
	padding-top: 50px;
	 }
 	.principal {
	padding: 40px 15px;
	text-align: center;
	}
	</style>

	<div class="container">
		<div class="principal">
		<?php 
			if(!empty($_POST)){
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$bancos = $_POST['bancos'];
				$query = "INSERT INTO usuarios(email, senha) VALUES ('$email','$senha')";
				if (in_array("P", $bancos)) { 
					$result = pg_query($conPostgres,$query);
					echo $result ? "ok postgres " : " falha postgres ";
				}
				if(in_array("M", $bancos)){
					$result = mysqli_query($conMysql,$query);
					echo $result ? " ok mysql " : " falha postgres ";
				}
			}else{
				echo "vazio";
			}
		 ?>
			
		</div>	
 	</div>
 	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous">
	</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

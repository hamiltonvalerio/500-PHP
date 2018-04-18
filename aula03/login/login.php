<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>
<div>
	<form action="" method="Post">
		<p>Login: <input type="email" name="email"></p>
		<p>Senha: <input type="password" name="password"></p>
		<input type="reset" >
		<input type="submit" value="enviar" >
	</form>
</div>

</body>
</html>

<?php  
	if(!empty($_POST)){
		if(($_POST["email"] == 'hamilton@valerio.eti.br') && ($_POST["password"] == '123')){
			session_start();
			$_SESSION["email"]=$_POST["email"];
			$_SESSION["password"]=$_POST["password"];
			$_SESSION["logado"]='true';
			header('location:app.php');
		}
	}
?>
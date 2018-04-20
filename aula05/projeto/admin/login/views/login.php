<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	.form{
		padding:  20px;
		border: 1px solid #ccc;
	}
	</style>

	<div class="container">
		<div class="principal">
			<div class="row">
				<h1>Login</h1>
			<form action="" method="post" accept-charset="utf-8" class="form">
				<div class="form-group">
					<input name="email" type="text" class="form-control" placeholder="Email:">	
				</div>
				<div class="form-group">
					<input name="senha" type="text" class="form-control" placeholder="Senha:">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		</div>	
 	</div>
 	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
<?php  
	 
	 
	include_once "../../../include/database/usuarios/controleUsuario.php";

	if(!empty($_POST)){
		$valida = buscarUsuario($_POST["email"], $_POST["senha"]);
		if($valida != ''){
			session_start();
			$_SESSION["id"]=$valida["id"];
			$_SESSION["nome"]=$valida["nome"];
			$_SESSION["email"]=$_POST["email"];
			$_SESSION["senha"]=$_POST["senha"];
			$_SESSION["logado"]='true';
			header('location:../../posts/views/cadastrarPost.php');
		}

	}
?>
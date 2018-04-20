<?php
	session_start();  
	if(empty($_SESSION)){
		//if($_SESSION["email"] && $_SESSION["password"]);	
		header('location:../../login/views/login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CADASTRAR POST</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<a href="../../login/actions/logout.php">Logout ||</a>
	<a href="../../../site/index.php"> Home</a>
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
				<h1>CADASTRAR POST</h1>
			<form action="../../../include/database/posts/controlePosts.php" method="post" accept-charset="utf-8" class="form">
				<div class="form-group">
					<input name="titulo" type="text" class="form-control" placeholder="Título:">	
				</div>
				<div class="form-group">
					<textarea name="texto" cols="40" rows="5" class="form-control" placeholder="Texto:"></textarea>
				</div>
				<input type="hidden" name="id" value="<?=$_SESSION['id']?>">
				<button type="submit" class="btn btn-primary">Cadastrar</button>
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
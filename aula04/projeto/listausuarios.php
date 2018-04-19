<?php 

	require 'bancopostgres.php';

	$data = buscarTodos('usuarios');

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

		<table border="1">
			<tr>
				<td>Email</td>
				<td>Senha</td>
				<td>Ações</td>
			</tr>
			<?php foreach ($data as $user) :?>
				<tr>
					<td><?= $user['email'] ?></td>
					<td><?= $user['senha'] ?></td>
					<td>
						<form method="post" action="deletar.php">
							<input type="hidden" name="id" value="<?= $user['id']?>">
							<input type="submit" value="Excluir">
						</form>
						<a href="form.php?id=<?=$user['id']?>">Editar</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

	 <a href="form.php">Voltar</a>
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

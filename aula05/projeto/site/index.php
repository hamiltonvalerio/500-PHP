<?php 
	
	// echo dirname(__DIR__) . "/include/database/posts/controlePosts.php";
	include_once "../include/database/posts/controlePosts.php";
	session_start(); 
	$data = buscarPosts();

	function validaUsuario(int $id = null){
		if(empty($_SESSION)){
			return false;
		}else if($id){
			if($_SESSION['id'] == $id){
				return true;	
			}else{
				return false;
			}
		}else{
			return false;
		}
			
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<a href="../admin/posts/views/cadastrarPost.php">Novo post</a>
	<?php if(empty($_SESSION)) :?>
			
	<?php elseif(validaUsuario($_SESSION['id'])): ?>
		<a href="../admin/login/actions/logout.php"> || Logout</a>
	
	<?php endif; ?>

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
			
			<table border="1">
			<thead>
				<tr><th colspan="4" >POSTS</th></tr>
			</thead>
			<?php foreach ($data as $post) :?>
			<tbody>
				<tr>
					<td width="200px">Título</td>
					<td width="600px" ><?= $post['titulo'] ?></td>
				</tr>
				<tr>
					<td width="200px" >Post</td>
					<td width="600px" ><?= $post['texto'] ?></td>
				</tr>
				<tr>
					<td width="200px" >Usuário</td>
					<td width="600px" ><?= $post['nome'] ?></td>
				</tr>
				<tr>
					<td width="200px" >ID POST</td>
					<td width="600px" ><?= $post['id'] ?></td>
				</tr>
				
				<tr>
					<td width="200px">Ações</td>
					<td width="600px">
						<?php if(validaUsuario($post['usuid'])) :?>
							<a href="">Alterar </a>
							||
							<a href="../include/database/posts/controlePosts.php?deletar=<?= $post['id'] ?>"> Excluir</a>	
						<?php endif; ?>

					</td>
				</tr>

				<tr>
					<td width="200px" height="20px"></td>
				</tr>
			</tbody>
			<?php endforeach; ?>
		</table>

		</div>	
 	</div>
 	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

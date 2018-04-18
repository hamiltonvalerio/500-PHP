<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

<div>

<form action="processaForm.php" method="Get">
	<p>Nome: <input type="text" name="nome" required="true"></p>
	<p>Idade: <input type="number" name="idade"></p>
	<p>Email: <input type="email" name="email"></p>
	<p>Senha: <input type="password" name="senha" maxlength="4"></p>
	<p>Cor: <input type="color" name="cor"></p>
	<p>Sexo: <input type="radio" name="sexo" value="M">M || <input type="radio" name="sexo" value="F">F</p>
	<p>
		Cursos: <input type="checkbox" name="cursos[]" value="php"> PHP
		<input type="checkbox" name="cursos[]" value="linux"> Linux
		<input type="checkbox" name="cursos[]" value="python"> Python
	</p>
	<p><input type="hidden" name="token" value="123"></p>
	<p><input type="range" name="range" min="0" max="10"></p>
	<input type="reset" class="btn btn-outline-danger">
	<input type="submit" value="enviar" class="btn btn-outline-primary">
	
</form>

</div>
<pre>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  
 </body>
</html>
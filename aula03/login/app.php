<?php
session_start();  

	echo "app.php\n";
	print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="logoff.php">
	<input type="submit" value="sair" >
</form>
</body>
</html>
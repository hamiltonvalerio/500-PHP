<?php 
	
	
	include_once dirname(__DIR__) . '/funcoesBanco.php';

	function buscarUsuario(string $email, string $senha){
		$where = " email = '$email' AND senha = '$senha'";
		$usuario = buscar('usuarios','id, nome',$where);
		return ($usuario) ?: '';
	}


?>
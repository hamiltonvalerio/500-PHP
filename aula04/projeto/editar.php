<?php 
require_once 'bancopostgres.php';
$user = null;
if (isset($_GET['id'])) {
	$where = "id=".$_GET['id'];
	$user = buscar('usuarios','*',$where);
}
if (empty($user)) {
	$user = ['email' => null,'senha' => null,'id' => null];
}
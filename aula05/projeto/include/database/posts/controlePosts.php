<?php 
	if(!empty($_GET)){
	deletarPost($_GET['deletar']);
	}
	

	include_once dirname(__DIR__) . '/funcoesBanco.php';

	function buscarPosts(){
		$array = [
    				0 => ['titulo' => '', 'texto' => '', 'nome' => '', 'id' => '']
				];
		//$teste = buscarTodosComUsuario('posts','*',null,null,'data_criacao DESC',null)?:$array;
		
		$posts = buscarTodosComUsuario('posts','*',' publicado = true ',null,'data_criacao DESC',null)?:$array;
		//print_r($posts);
		//die();
		return $posts;
	}

	if(!empty($_POST)){

		$dados = ['titulo' => $_POST["titulo"], 'texto' => $_POST["texto"], 'data_criacao' => date('Y-m-d'), 'publicado' => true, 'id_usuario' => $_POST["id"]];
		inserirPost($dados);
		direcionaIndex();

	}

	function inserirPost($dados){
		inserir('posts', $dados);
		direcionaIndex();
	}

	function deletarPost($dados){
		$id = 'id ='.$dados;
		deletar('posts', $id);
		direcionaIndex();
	}

	function direcionaIndex(){
		header('location:../../../site/index.php');
	}

?>
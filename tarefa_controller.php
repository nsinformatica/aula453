<?php
	error_reporting(E_ALL);
	// verificar contexto do caminho das pastas onde os arquivos estarão
	require "tarefa.model.php";
	require "tarefa.service.php";
	require "conexao.php";

	echo '<pre>';
	print_r($_POST);
	echo '</pre>';


	$tarefa = new Tarefa();
	$tarefa->__set('tarefa', $_POST['tarefa']);
	$conexao = new Conexao();
	$tarefaService = new TarefaService($conexao, $tarefa);

	echo '<pre>';
	print_r($tarefaService);
	echo '</pre>';


?>

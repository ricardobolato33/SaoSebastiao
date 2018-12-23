<?php
	session_start();
	if (isset($_POST['ds_mensagem1'])){
		 $ds_mensagem1 = $_POST['ds_mensagem1'];
	 }

	 if (isset($_POST['ds_mensagem2'])){
		$ds_mensagem2 = $_POST['ds_mensagem2'];
	}
	 
	$ds_mensagem1 = trim($ds_mensagem1);
	$ds_mensagem2 = trim($ds_mensagem2);
	
	// $conexao->error   RETORNA EXATAMENTE O ERRO QUE DEU NA CONEXAO (USAR PRA DEBUG, POIS É ERRO TECNICO)
	$conexao = mysqli_connect('Localhost','root','','db_ss') or die ($conexao->error);
	$conexao->set_charset("utf8"); /* essa linha ajusta os caracteres especiais no momento do update*/
	$query  = "UPDATE T_MENSAGEM_AVISO SET DS_MENSAGEM1 = '$ds_mensagem1', DS_MENSAGEM2 = '$ds_mensagem2' ";
	mysqli_query($conexao, $query); // aqui roda o comando
	$_SESSION['id_logado'] = "S";
	 
	header("Location: reserv.php");
	exit();
?>
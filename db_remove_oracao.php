<?php
	session_start();
	if (isset($_POST['id_inicial'])){
		 $cd_pedido_oracao_ini = $_POST['id_inicial'];
		 $cd_pedido_oracao_fin = $_POST['id_final'];
	 }
	 
	 // $conexao->error   RETORNA EXATAMENTE O ERRO QUE DEU NA CONEXAO (USAR PRA DEBUG, POIS É ERRO TECNICO)
	 $conexao = mysqli_connect('Localhost','root','','db_ss') or die ($conexao->error);
	 $query = "DELETE FROM t_pedido_oracao WHERE cd_pedido_oracao BETWEEN $cd_pedido_oracao_ini AND $cd_pedido_oracao_fin";
	 mysqli_query($conexao, $query); // aqui roda o comando
	 $_SESSION['id_logado'] = "S";

	 header("Location: reserv.php");
	 exit();
?>
<?php
	 $conexao_msg  = mysqli_connect('Localhost','root','','db_ss');
	 mysqli_set_charset( $conexao_msg, 'utf8');
	 $query_msg    = "SELECT DS_MENSAGEM1, DS_MENSAGEM2 FROM T_MENSAGEM_AVISO";
	 $exec_msg     = mysqli_query($conexao_msg, $query_msg);
?>

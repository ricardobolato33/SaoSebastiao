<?php
	 // $conexao->error   RETORNA EXATAMENTE O ERRO QUE DEU NA CONEXAO (USAR PRA DEBUG, POIS É ERRO TECNICO)
	 $cd_pedido_oracao = $_POST['cd_pedido_oracao'];
	 $conexao = mysqli_connect('Localhost','root','','db_ss') or die ($conexao->error);
	 $query = "DELETE FROM t_pedido_oracao WHERE cd_pedido_oracao = $cd_pedido_oracao"; 
	 mysqli_query($conexao, $query); // aqui roda o comando
	 header("Location: reserv.php");
	 exit();
?>
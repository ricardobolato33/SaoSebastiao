<?php
	$conexao = mysqli_connect('Localhost','root','','db_ss');
	$query   = "SELECT * FROM T_PEDIDO_ORACAO ORDER BY CD_PEDIDO_ORACAO DESC";
	$exec    = mysqli_query($conexao, $query);
?>

<?php
    session_start();

    $nome    		    = $_POST['nome'];
    $email  			= $_POST['email'];
    $mensagem    		= $_POST['mensagem'];
    $data_atual        = date ("Y-m-d");

    $conexao = mysqli_connect('Localhost','root','','db_ss');
    $query   = "INSERT INTO t_pedido_oracao (NM_USUARIO, DS_EMAIL, DS_PEDIDO_ORACAO, DT_PEDIDO) values ('$nome', '$email', '$mensagem', '$data_atual')";
    mysqli_query($conexao, $query) or die ('Não foi possivel cadastrar o mensagem');   

    session_destroy();
?>

<script>
    window.location = 'index.php';
    alert("Pedido de oração enviado com sucesso!");
</script>';	


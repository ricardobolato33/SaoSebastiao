<?php
    /*INICIA A VERIFICAÇÃO DO USUÁRIO E SENHA DIGITADO, VERIFICA SE É VÁLIDO*/
    session_start();
    
    $usuario = trim($_POST['usuario']);
    $senha   = trim($_POST['senha']);
    
    if (!isset($_POST['usuario']) && !isset($_POST['senha'])) {
        session_destroy();
        echo "<script language=javascript>
                window.location = 'index.php'; 
                alert( 'Atenção: Usuário/Senha não foi informado!');
             </script>";
        exit();
    }

  /* CONECTANDO COM O BANCO DE DADOS PARA VERIFICAR SE É VALIDO USUARIO E SENHA*/
   $conexao = @mysqli_connect('localhost', 'root', '', 'db_ss'); 
   $query   = "SELECT * FROM T_USUARIO_ADM WHERE NM_USUARIO = '$usuario' AND DS_SENHA = '$senha'";
   $retorno = mysqli_query($conexao, $query) or die ('Erro ao conectar ao banco de dados!');
   $dados   = mysqli_fetch_assoc($retorno);
   
   if ($dados != null) {
       null;
   }
   else{
        echo "<script language=javascript>
                window.location = 'administrativo.php'; 
                alert( 'Atenção: Usuário/Senha inválido. Entre com usuario correto!');
             </script>";
        exit();
   } 
     
   /*cria session logado*/
   $_SESSION['id_logado'] = "S";

   header("Location: reserv.php");
   exit();
?>

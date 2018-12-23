<?php
    include_once('header.php');
?>


<!-- DIV BARRA TOP-->
<div class="barra1">
    <div class="diasemana">
        <script language=javascript type="text/javascript">
            document.write ("<span>" + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + "   </span>")
        </script>
    </div>
</div> 

<div class="logo">
    <div class="logo_pri">
      <!-- <img src="img/logo.jpg" style="padding:3px;  width:160px; height:130px;"> -->

       <!-- <a href="index.php"> <img src="img/logo.jpg" style="padding:3px;  width:160px; height:130px;"> -->
       <a href="index.php"><img src="img/logo.jpg" style="padding:3px;  width:160px; height:130px;"/></a>
    </div>

    <div class="aviso1">
        <div class="txtaviso">
            <p>Avisos</p>
        </div>
    </div>

     <?php
        /* conexão com o banco de dados para carregar os avisos*/        
        $conexao = mysqli_connect('Localhost','root','','db_ss');
        mysqli_set_charset( $conexao, 'utf8'); /* comando para corrigir os caracteres especiais */
	    $query   = "SELECT DS_MENSAGEM1, DS_MENSAGEM2 FROM T_MENSAGEM_AVISO";
        $retorno = mysqli_query($conexao, $query);
        $dados   = mysqli_fetch_assoc($retorno);

        $mensagem_1 = trim($dados['DS_MENSAGEM1']);
        $mensagem_2 = trim($dados['DS_MENSAGEM2']);
    ?>
    
     <div class="infaviso">
         <div class="txtfmarquee">
            <marquee> 
                <?php echo $mensagem_1 ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $mensagem_2 ?>
            </marquee>
        </div>
    </div>
</div> 

   <!-- DIV MENU-->
<div class="menu_pri">
    <div class="navbar">  
        <div class="dropdown">
            <button class="dropbtn">A Paróquia 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="ss.php">Vida de São Sebastião</a>
                <a href="paroco.php">Pároco</a>
                <a href="diacono.php">Diácono</a>
                <a href="historia.php">História de Igreja</a>
            </div>
        </div> 

        <div class="navbar">  
            <div class="dropdown">
                <button class="dropbtn">Multimídia 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="fotos.php">Fotos</a>
                    <a href="videos.php">Videos</a>
                    <a href="#">Audio</a>
                </div>
            </div> 
            
            <div class="navbar">
                <a href="oracao.php">Pedido de Oração</a>
                <a href="#home">Notícias</a>
                <a href="atendimento.php">Contato</a>
            </div> 
        </div>  
    </div>
</div>

<div class="divoracao">   
    <div class="informacao_oracao">
        <span>Acenda sua vela de São Sebastião. Faça seu pedido de uma graça ou um livramento</span>
    </div>
    
    <div class="formulario">
        <form class="form_vela" name="form-oracao" action="cadastrar_oracao.php" method="POST">
           <h1>Envie seu pedido de oração</h1> 
           <p class="nome">
                <input type="text" name="nome" placeholder="informe seu nome" required="required">
            </p>

            <p class="email">
                <input type="email" name="email" placeholder="informe seu email (Opcional)">
            </p>

            <p class="mensagem">
                <textarea name="mensagem" placeholder="deixe sua mensagem"></textarea>
            </p>

            <p class="enviar">
                <input type="submit" name="enviar" value="Enviar">
            </p>
        </form>
    </div>

    <div class="vela">
        <img src="img/vela_acesa.gif" style="width:51%"> 
        <img src="img/mulher-rezando.png" style="width:40%;"> 
    </div>

    <div class="informacao1">
        <span>Nosso compromisso zelar pela sua privacidade. Fique em paz!</span>
    </div>
    <div class="informacao2">
        <span>"Não andem ansiosos por coisa alguma, mas em tudo, pela oração e súplicas, e com ação de graças, apresentem seus pedidos a Deus." - Felipenses 4:6</span>
    </div>
</div>
     

<?php
    include_once('footer.php');
?>
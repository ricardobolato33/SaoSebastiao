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
    
    <div class="conectar">
        <a href="administrativo.php"><img src="img/bto-conectar.png" title="Área do Administrador" style=" padding:0px;  width:120px; height:55px;"></a>
    </div>
</div> 

<div class="logo">
    <div class="logo_pri">
       <img src="img/logo.jpg" style=" padding:3px;  width:160px; height:130px;"> 
       <href="index.php">
    </div>

    <div class="aviso1">
        <div class="txtaviso">
            <p>Avisos:</p>
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

    <!--<div class="logo_2">
        <img src="img/logo2.jpg" style="width:180; height:100px;"> 
    </div>-->
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
                    <a href="videos.php">Vídeos</a>
                    <a href="audio.php">Audio</a>
                </div>
            </div> 
            
            <div class="navbar">
                <a href="oracao.php">Pedido de Oração</a>
                <a href="noticia.php">Notícias</a>
                <a href="atendimento.php">Contato</a>
            </div> 
        </div>  
    </div>
</div>

<!-- Slider -->
<div class="div_slider">
    <section  class="galeria">
        <img class = "fotos" src="img/slide01.jpg" style="width:100%; height:600px;"/>
        <img class = "fotos" src="img/slide02.jpg" style="width:100%; height:600px;"/>
        <img class = "fotos" src="img/slide03.jpg" style="width:100%; height:600px;"/>
    </section>
</div>

<!-- Conteudo -->
<div class="informacao">
    <div class="informacao_pri">
        <div style="display: block;">
            <a href="oracao.php"><img src="img/pedido.png" style="width:100%; height:200px;"/></a>
        </div>
    </div>

    <div class="informacao_seg">
        <div style="display: block;">
            <img src="img/curalibertacao.jpg"  width="100%" height="200px;"/>
        </div>
    </div>
  
    <div class="informacao_ter">
        <div style="display: block;" >
            <!--<img src="img/agenda.jpg" style="padding:3px; width:25px; height:25px; display: inline-block;"/> -->
            <img src="img/horamissa.png"  width="90%" height="180px;"/>
        </div>
    </div>
</div>

<div class="banner">
    <img src="img/Triduo2019.jpg"  height="150px;"/>
</div>

<?php
    include_once('footer.php');
?>
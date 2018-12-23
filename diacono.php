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
                    <a href="#">Videos</a>
                    <a href="#">Audio</a>
                </div>
            </div> 
            
            <div class="navbar">
                <a href="oracao.php">Pedido de Oração</a>
                <a href="#home">Notícias</a>
                <a href="#home">Contato</a>
            </div> 
        </div>  
    </div>
</div>

<div class="divmaster">   
    <div class="divdescricaopri_d">
        <div class="divfotodiacono">
            <img src="img/fotodiacono.jpg" style="padding:0px;  width:100%; border-radius: 8px 8px 8px 8px;"> 
        </div> 
        
        <div class="divdadosdiacono">
            <div class="titulobibliografia_d">
                <div class="desricaotitulo1_d">
                     DIÁCONO <br />Luis Martini
                </div>
           </div>
           
           <div class="descricaobibliografia_d">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diácono Luis Martini, nascido em 17 de novembro de 1964 na cidade de Marília - SP, 
                teve sua ordenação em 05 de setembro de 2018 na paróquia de São Sebastião de Araraquara - SP. <br />
                Sua primeira ordenação permanente foi realizado por Dom Paulo Sérgio Machado.
                Casado com Marlene Marinho Martini, diácono Luis é pai de dois filhos, Camila Martini e Felipe Martine.
           </div>
        </div>         
    </div>  
</div>
     

<?php
    include_once('footer.php');
?>
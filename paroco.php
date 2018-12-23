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

<div class="divmaster">   
    <div class="divdescricaopri">
        <div class="divfotopadre">
            <img src="img/fotopadre.jpg" style="padding:0px;  width:100%; border-radius: 8px 8px 8px 8px;"> 
        </div> 
        
        <div class="divdadospadre">
            <div class="titulobibliografia">
                <div class="desricaotitulo1">
                     PADRE <br />Oswaldo Gonçalves Pereira
                </div>
           </div>
           
           <div class="descricaobibliografia">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Padre Oswaldo Gonçalves Pereira nasceu em Ibitinga, interior do estado de São Paulo em cinco de Julho de 1963,
                    filho de Salvador Gonçalves Pereira (falecido) e Benedita Amâncio Pereira. Foi batizado em Ibitinga (SP) em 06/01/1964 e Crismado
                    em 08/02/1965.<br />  
                    Fez seus estudos primários e secundários na Escola Industrial de Ibitinga - SP, Filosofia no Seminário Diocesano de 
                    São Carlos e licenciatura Plena em Filosofia, Psicologia e História na Faculdade Salesiana de Filosofia, Ciências e Letras de Lorena (SP) 
                    e Teologia na PUCCAMP em Campinas (SP). <br />
                    Ordenou-se diácono em 14/10/1988 e Padre em 05/01/1989, pelas mãos de Dom Constatino Amstalden em Ibitinga(SP).
           </div>
        </div>         
    </div>
    
    <div class="divdadosfuncoes">
        <div class="desricaotitulo2">
            <span>Ministérios e Funções Exercídos</span>
        </div>
    </div>
        
    <div class="descricaofuncoes">
        <h4> &diams;&nbsp;&nbsp;Em 1989, foi Vigário Paroquial na Paróquia São José da Santíssima Trindade (Novo Horizaonte - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1990 a 1996 - Pároco da Paróquia Nossa Senhora de Fátima (São Carlos - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1990 a 1996 - Professor de Filosofia e Psicologia no Seminário Diocesano<h4>
        <h4> &diams;&nbsp;&nbsp;1991 a 1993 - Coordenador da Pastoral da Religião Episcopal I (São Carlos - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1992 a 1995 - Diretor Espiritual da Casa de Formação (Campinas - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1993 a 1995 - Coordenador da Pastoral Universitária<h4>
        <h4> &diams;&nbsp;&nbsp;1995 - Defensor do Vínculo da Câmara Eclesiástica da Diocesse (São Carlos - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1997 - Membro de projeto Comunidades Terapêuticas (TENDA) - Cremona (Itália)<h4>
        <h4> &diams;&nbsp;&nbsp;1997 a 1998 -  Vigário Paroquial da Paróquia N.S. Aparecida (Matão - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;1998 a 2001  e também de 2003 a 2005 - Representante do Conselho de Presbíteros<h4>
        <h4> &diams;&nbsp;&nbsp;1999 a 2008 Pároco da Paróquia São Sebastião (Matão - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;2001 - Coordenador Diocesano da Pastoral da Saúde<h4>
        <h4> &diams;&nbsp;&nbsp;2008 - Reitor do Seminário de Teologia (Campinas - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;2009 - Reitor do Seminário de Filosofia (São Carlos - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;2010 - Vigário Paroquial da Paróquia São Nicolau de Flue (são Carlos - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;2004 a 2003 - Membro do Colégio de Consultores da Diocese<h4>
        <h4> &diams;&nbsp;&nbsp;2011 - Atualmente é Paroco da Paróquia São Sebastião (Araraquara - SP)<h4>
        <h4> &diams;&nbsp;&nbsp;2017 - Foi nomeado vigário epsicopal para novas comunidades da dioceses<h4>
    </div>
</div>
     

<?php
    include_once('footer.php');
?>
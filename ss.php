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
                <a href="index.php">A vida de São Sebastião</a>
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

<div class="divmaster_ss">   
    <div class="divdescricaopri_ss">
        <div class="divfotos">
            <img src="img/fotoss.jpg" style="padding:0px;  width:100%; border-radius: 8px 8px 8px 8px;"> 
        </div> 
        
        <div class="divdadosss">
            <div class="titulobibliografia_s">
                <div class="desricaotitulo1_s">
                     A VIDA <br />São Sebastião
                </div>
           </div>
           
           <div class="descricaobibliografia_s">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;São Sebastião era um soldado romano que foi martirizado por professar e não renegar a fé em Cristo Jesus. 
                    Sua história é conhecida somente pelas atas romanas de sua condenação e martírio. Nessas atas de martírio de cristãos, os escribas escreviam dando poucos 
                    detalhes sobre o martirizado e muitos detalhes sobre as torturas e sofrimentos causados a eles antes de morrerem. Essas atas eram expostas ao público nas 
                    cidades com o fim de desestimular a adesão ao cristianismo.<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;São Sebastião nasceu na cidade de Narbona, na França, em 256 d.C. Seu nome de origem grega, Sebastós, significa divino, venerável. Ainda pequeno, sua 
                    família mudou-se para Milão, na Itália, onde ele cresceu e estudou. Sebastião optou por seguir a carreira militar de seu pai. No exército romano, 
                    chegou a ser Capitão da 1ª da guarda pretoriana. Esse cargo só era ocupado por pessoas ilustres, dignas e corretas. Sebastião era muito dedicado à carreira, 
                    tendo o reconhecimento dos amigos e até mesmo do imperador romano, Maximiano. Na época, o império romano era governado por Diocleciano, no oriente, e por Maximiano,
                    no ocidente. Maximiano não sabia que Sebastião era cristão. Não sabia também que Sebastião,  sem deixar de cumprir seus deveres militares, não participava dos martírios 
                    nem das manifestações de idolatria dos romanos.
           </div>
        </div>         
    </div>
        
    <div class="descricaofuncoes_ss">
        <h3>Missionário no exército romano</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;De acordo com Atos apócrifos atribuídos a Santo Ambrósio de Milão, Sebastião teria se alistado no exército romano já com a única intenção de afirmar e dar força ao coração dos cristãos,
        enfraquecidos diante das torturas. <br/>
        
        <h3>Martírio de São Sebastião</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ao tomar conhecimento de cristãos infiltrados no exército romano, Maximiano realizou uma caça a esses cristãos, expulsando-os do exército. Só os filhos de soldados ficaram obrigados
        a servirem o exército. E este era o caso do Capitão Sebastião. Para os outros jovens a escolha era livre. Denunciado por um soldado, o imperador se sentiu traído e mandou que Sebastião renunciasse à sua fé em Jesus Cristo. 
        Sebastião se negou a fazer esta renúncia. Por isso, Maximiano mandou que ele fosse morto para servir de exemplo e desestímulo a outros. Maximiano, porém, ordenou que Sebastião tivesse uma morte cruenta diante de todos. Assim,
        os arqueiros receberam ordens para matarem-no a flechadas. Eles tiraram suas roupas, o amarraram num poste no estádio de Palatino e lançaram suas flechas sobre ele. Ferido, deixaram que ele sangrasse até morrer.
        
        <h3>Sepultamento</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alguns autores acreditam que Sebastião foi enterrado no jardim da casa de Lucina, na Via Ápia, onde se encontra sua Basílica. Construíram, então, nas catacumbas, um templo, 
        a Basílica de São Sebastião. O templo existe até hoje e recebe devotos e peregrinos do mundo todo.
        
        <h3>Devoção a São Sebastião</h3>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tal como São Jorge, Sebastião foi um dos soldados romanos mártires e santos, cujo culto nasceu no século IV e que atingiu o seu auge nos séculos XIV e XV, tanto na Igreja Católica como na Igreja Ortodoxa.
        São Sebastião é celebrado no dia 20 de janeiro. Existe também uma capela em Palatino, com uma pintura que mostra Irene tratando das feridas de Sebastião. Irene também foi canonizada e sua festa é no dia 30 de março.
    </div>
</div>

<div class="oracao_ss">
    <div style="display: block;">
        <img src="img/moldura_oracao.jpg"  style="width:100%; height:350px;"/>
        
    </div>
</div>

<div class = "referencia">
    <br/><br/><a target="_blank" href = "https://cruzterrasanta.com.br/historia-de-sao-sebastiao/162/102/#c"> Fonte: https://cruzterrasanta.com.br/historia-de-sao-sebastiao/162/102/#c </a>
</div>

<?php
    include_once('footer.php');
?>
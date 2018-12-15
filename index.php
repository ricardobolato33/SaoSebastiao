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
        <a href="administrativo.php"><img src="img/bto-conectar.ico" style=" padding:0px;  width:20px; height:20px;"></a>
    </div>
    
    <!--
    <div class="area-adm">
         <form name="form-adm" action="administrativo.php" method="POST">
             <input class="input-area"  type="usuario" placeholder="Usuário">
             <input class="input-area"  type="senha" placeholder="Password">
             <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>-->

</div> 

<div class="logo">
    <div class="logo_pri">
       <img src="img/logo.jpg" style=" padding:3px;  width:160px; height:130px;"> 
       <href="index.php">
    </div>

    <div class="aviso1">
        <div class="txtaviso">
            <p>Avisos</p>
        </div>
    </div>

     <div class="infaviso">
         <div class="txtfmarquee">
            <marquee> O Senhor é meu pastor e nada me faltará &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Missa todos os Domingos nos horário 07:30 e 19:00</marquee>
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

<?php
    include_once('footer.php');
?>
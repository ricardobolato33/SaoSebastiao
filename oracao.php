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

     <div class="infaviso">
         <div class="txtfmarquee">
            <marquee> O Senhor é meu pastor e nada me faltará</marquee>
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
    <div class="formulario">
        <form class="form_vela" name="form-oracao" action="" method="post">
           <h1>Envie seu pedido de oração</h1> 
           <p class="nome">
                <input type="text" name="nome" placeholder="informe seu nome" required="required">
            </p>

            <p class="email">
                <input type="email" name="email" placeholder="informe seu email" required="required">
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
        <img src="img/vela_acesa.gif" style="padding:0px;  width:100%; border-radius: 8px 8px 8px 8px;"> 
    </div>
</div>
     

<?php
    include_once('footer.php');
?>
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
     
    <div class="logo_2">
        <img src="img/logo2.jpg" style="width:180; height:100px;"> 
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
                <a href="#home">Pedido de Oração</a>
                <a href="#home">Notícias</a>
                <a href="#home">Atendimento</a>
            </div> 
        </div>  
    </div>
</div>
 
<ul id="album-fotos">
    <li id="foto01"><span>São Sebastião</span></li>
    <li id="foto02"><span>São Sebastião</span></li>
    <li id="foto03"><span>São Sebastião</span></li>
    <li id="foto04"><span>São Sebastião</span></li>
    <li id="foto05"><span>São Sebastião</span></li>
    <li id="foto06"><span>São Sebastião</span></li>
    <li id="foto07"><span>São Sebastião</span></li>
    <li id="foto08"><span>São Sebastião</span></li>
    <li id="foto09"><span>São Sebastião</span></li>
    <li id="foto010"><span>São Sebastião</span></li>
    <li id="foto011"><span>São Sebastião</span></li>
    <li id="foto012"><span>São Sebastião</span></li>
    <li id="foto013"><span>São Sebastião</span></li>
    <li id="foto014"><span>São Sebastião</span></li>
    <li id="foto015"><span>São Sebastião</span></li>
    <li id="foto016"><span>São Sebastião</span></li>
    <li id="foto017"><span>São Sebastião</span></li>
    <li id="foto018"><span>São Sebastião</span></li>
    <li id="foto019"><span>São Sebastião</span></li>
    <li id="foto020"><span>São Sebastião</span></li>
    <li id="foto021"><span>São Sebastião</span></li>
    <li id="foto022"><span>São Sebastião</span></li>
    <li id="foto023"><span>São Sebastião</span></li>
    <li id="foto024"><span>São Sebastião</span></li>
    <li id="foto025"><span>São Sebastião</span></li>
</ul>
     

<?php
    include_once('footer.php');
?>
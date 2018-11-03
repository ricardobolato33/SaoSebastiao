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
                <a href="ss.php">A vida de São Sebastião</a>
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
                    <a href="#">Fotos</a>
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
        
    <div class="descricaofuncoes_d">
        
    </div>
</div>
     

<?php
    include_once('footer.php');
?>
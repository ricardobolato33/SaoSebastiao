<?php
    include_once('header.php');
?>

<!--<div id="faixa">
  <div class="classeBarraTop">
    <h5> Rua Pará, 459 | Jardim Brasil | Araraquara | SP | CEP: 14811-070 </h5>
  </div>
 </div>

<!-- DIV DATA E HORA-
<div class="classeBarraHora">
    <script language=javascript type="text/javascript">
        document.write ("<h5>" + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + "   </h5>")
    </script>
</div>-->

<!-- DIV BARRA TOP-->
<div class="barra1">
    <div>
        <!--<img src="img/phone.png" style="margin-left:500px;  margin-top:3px; width:20; height:20px;"> 
        <span class="divtelefone">(16) 3337-1898 | Araraquara - SP</span>-->
    </div>
</div> 

<div class="logo">
    <div class="logo_pri">
       <img src="img/logo.jpg" style=" padding:3px;  width:180; height:130px;"> 
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
                <a href="#">História</a>
                <a href="#">O Pároco</a>
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
                <a href="#home">Noticias</a>
                <a href="#home">Atendimento</a>
            </div> 
        </div>  
    </div>
</div>

<!-- Slider -->
<div class="div_slider">
    <section  class="galeria">
        <img class ="fotos" src="img/teste1.jpg" style="width:100%; height:450px;"/>
        <img class ="fotos" src="img/teste2.jpg" style="width:100%; height:450px;"/>
        <img class ="fotos" src="img/teste3.jpg" style="width:100%; height:450px;"/>
    </section>
</div>

<!-- Conteudo -->
<div class="informacao">
    <div class="informacao_pri">
        <div style="display: block;">
        </div>
        
        <div style="display: block;">
            <div class="conteudocaixa1">             
            </div>
        </div>
    </div>

    <div class="informacao_seg">
        <div class="container">
            <img src="img/curalibertacao.jpg"  width="525" height="200"/>
        </div>
    </div>
  
    <div class="informacao_ter">
        <div style="display: block;" >
            <img src="img/agenda.jpg" style="padding:3px; width:25px; height:25px; display: inline-block;"/> 
            <span class="h1_caixa3"> Horário das Missas</span>
        </div>

        <div style="display: block;" >
            <div class="conteudocaixa3">
                <div class="horamissa">
                    <p>Quartas-Feiras: 19:00 </p>
                    <p>Sextas-Feiras:  15:00 </p>
                    <p>Sábados:        18:00 e 20:00</p>
                    <p>Domingos:       08:00 e 19:00</p>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php
    include_once('footer.php');
?>
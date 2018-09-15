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
<div class="logo">
    <div class="logo_pri">
       <img src="img/logo.jpg" style=" padding:5px;  width:180; height:95px;"> 
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
            <a href="#">Historia</a>
            <a href="#">O Paroco</a>
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

 <!--slider daqui pra baixo -->
<section  class="galeria">
  <img class ="fotos" src="img/01.jpg"/>
  <img class ="fotos" src="img/02.jpg"/>
  <img class ="fotos" src="img/03.jpg"/>
</section>

<div class="container">
  <h3>dados</h3>
  <p>dados.</p>
</div>

<?php
    include_once('footer.php');
?>
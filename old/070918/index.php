<?php
    include_once('header.php');
?>

<div id="faixa">
  <div class="classeBarraTop">
    <!--<h5> Rua Pará, 459 | Jardim Brasil | Araraquara | SP | CEP: 14811-070 </h5>-->
  </div>
 </div> 

<!-- DIV DATA E HORA-
<div class="classeBarraHora">
    <script language=javascript type="text/javascript">
        document.write ("<h5>" + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + "   </h5>")
    </script>
</div>-->

<!-- DIV BARRA TOP
<div class="classeBarraTop">
  <h5> Rua Pará, 459 | Jardim Brasil | Araraquara | SP | CEP: 14811-070 </h5>
</div> -->

<!-- DIV MENU-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!--<div class="navbar-header">
      <a class="navbar-brand" href="#">São Sebastião</a>
    </div>-->
    <ul class="nav navbar-nav">
      <li class="dropdown"><a style="color:#8B2500"class="dropdown-toggle" data-toggle="dropdown" href="#">A Paróquia<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">História da Igreja</a></li>
          <li><a href="#">O Paroco</a></li>
        </ul>
      </li>
      
      <li class="dropdown"><a style="color:#8B2500" class="dropdown-toggle" data-toggle="dropdown" href="#">Multimídia<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Fotos</a></li>
          <li><a href="#">Vídeos</a></li>
          <li><a href="#">Audio</a></li>
        </ul>
      </li>
      <li><a style="color:#8B2500" href="#">Atendimento</a></li>
    </ul>
  </div>
</nav>


<!-- slider daqui pra baixo -->


<section  class="galeria">
  <img class ="fotos" src="img/01.jpg"/>
  <img class ="fotos" src="img/02.jpg"/>
  <img class ="fotos" src="img/03.jpg"/>
</section>





  
<!--<div class="container">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
</div>-->


<?php
    include_once('footer.php');
?>
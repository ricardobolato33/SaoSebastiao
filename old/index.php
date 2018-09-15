<?php
    include_once('header.php');
?>

<div class="classeBarraTop">
    <script language=javascript type="text/javascript">
        document.write ("<h5>" + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + "   </h5>")
    </script>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
    
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">A Paroquia <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">História da Igreja</a></li>
          <li><a href="#">O Paroco</a></li>
        </ul>
      </li>
      
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Multimídia <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Fotos</a></li>
          <li><a href="#">Vídeos</a></li>
          <li><a href="#">Audios</a></li>
        </ul>
      </li>
      
      <li><a href="#">Contato</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"> <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"> <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  



<?php
    include_once('footer.php');
?>
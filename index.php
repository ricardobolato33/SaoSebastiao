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


<!-- Slider -->
<div class="div_slider">
    <section  class="galeria">
      <img class ="fotos" src="img/teste1.jpg" style="width:100%; height:450px;"/>
      <img class ="fotos" src="img/teste2.jpg" style="width:100%; height:450px;"/>
      <img class ="fotos" src="img/teste3.jpg" style="width:100%; height:450px;"/>
    </section>
</div>

<!-- informações-->
<style>/** porque nao da certo no arquivo css ???*/
    .informacao_pri{
        display: flex;
        padding:0;
        margin-top: 20px;
        margin-inline-start: 20px;
        margin-right: 20px;
        width: 33%;
        height: 200px;
        box-shadow: 0px 0px  10px  2px gray;
        background-color:blue;
        /*background-image: url(img/rezando.jpg);
        background-size:cover;*/
}
</style>

<div class="informacao">
  <div class="informacao_pri">
   <img src="img/agenda.jpg" style="padding:17px; width:25px; height: 25px;"/> 
    <h1 class="h1_caixa1"> Horário das Missas </h1>
    <div class="conteudocaixa1">
    </div>
  </div>

  <div class="informacao_seg">
      <div class="container">
          <h1> Eventos </h1>
          <p>teste</p>
      </div>
  </div>
  
  <div class="informacao_ter">
    <div class="container">
        <h1> Pedido de Oração</h1>
    </div>
  </div>

</dv>


<div class="box">

</div>
<!--
<div class="container">
  <h3>dados</h3>
  <p>dados.</p>
</div>-->

<?php
    include_once('footer.php');
?>
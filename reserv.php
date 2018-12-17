<?php
    include_once('header.php');
    @include_once("db_listar_oracao.php") /* carrega o select para listar as orações enviadas */
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

<!-- DIV MENU -->
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

<?php
    /*INICIA A VERIFICAÇÃO DO USUÁRIO E SENHA DIGITADO, VERIFICA SE É VÁLIDO*/
    if (!isset($_POST['usuario']) && !isset($_POST['senha'])){
        session_destroy();
        echo "<script language=javascript>
                window.location = 'index.php'; 
                alert( 'Atenção: Usuário/Senha não foi informado!');
             </script>";
        exit();
    }
    /* TIRA OS ESPAÇOS */
    $usuario = trim($_POST['usuario']);
    $senha   = trim($_POST['senha']);
   
    /* CONECTANDO COM O BANCO DE DADOS PARA VERIFICAR SE É VALIDO USUARIO E SENHA*/
   $conexao = @mysqli_connect('localhost', 'root', '', 'db_ss'); 
   $query   = "SELECT * FROM T_USUARIO_ADM WHERE NM_USUARIO = '$usuario' AND DS_SENHA = '$senha'";
   $retorno = mysqli_query($conexao, $query) or die ('Erro ao conectar ao banco de dados!');
   $dados   = mysqli_fetch_assoc($retorno);

   if ($dados != null){
        session_start();
   }
   else{
        echo "<script language=javascript>
                window.location = 'administrativo.php'; 
                alert( 'Atenção: Usuário/Senha inválido. Entre com usuario correto!');
             </script>";
        exit();
   } 
?>

<div class="area_reserv">
    <h2>Área Administrativa</h2>
</div>

<div class="titulos">
  Pedidos de orações enviados
</div>

<div class = "reserv">
    <table class="tabela_oracao">
        <thead class="label_tabela">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">USUARIO</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">PEDIDO DE ORAÇÃO</th>
                <th scope="col">DATA</th>
            </tr>
        </thead>
        
        <tbody>
            <?php while($dados = mysqli_fetch_assoc($exec)):?>
                <tr class="linha_tabela">
                    <th class="id_linha" scope="row"><?=$dados['CD_PEDIDO_ORACAO']?> </th>
                    <td>            <?=$dados['NM_USUARIO']      ?> </td>
                    <td>            <?=$dados['DS_EMAIL']        ?> </td>
                    <td>            <?=$dados['DS_PEDIDO_ORACAO']?> </td>
                    <td>            <?=$dados['DT_PEDIDO']       ?> </td>
                </tr>
            <?php endwhile ?>
	    </tbody>
	</table>
</div>


<?php
    include_once('footer.php');
?>
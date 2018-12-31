<?php
    include_once('header.php');
    @include_once("db_listar_oracao.php"); /* carrega o select para listar as orações enviadas */
    @include_once("db_listar_mensagem_aviso.php"); /* carrega o select para listar as mensagem */
    session_start();

    $id_logado = trim($_SESSION['id_logado']);
    
    if ($id_logado != "S"){
        echo "<script language=javascript>
                window.location = 'administrativo.php'; 
                alert( 'Atenção: Usuário não fez o login da forma correta. Verifique seu usuário e senha a tente novamente!');
             </script>";
        session_destroy();
    }
    $id_logado = "N";
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

     <?php
        /* conexão com o banco de dados para carregar os avisos*/        
        $conexao = mysqli_connect('Localhost','root','','db_ss');
        mysqli_set_charset( $conexao, 'utf8'); /* comando para corrigir os caracteres especiais */
	    $query   = "SELECT DS_MENSAGEM1, DS_MENSAGEM2 FROM T_MENSAGEM_AVISO";
        $retorno = mysqli_query($conexao, $query);
        $dados   = mysqli_fetch_assoc($retorno);

        $mensagem_1 = trim($dados['DS_MENSAGEM1']);
        $mensagem_2 = trim($dados['DS_MENSAGEM2']);
    ?>
    
     <div class="infaviso">
         <div class="txtfmarquee">
            <marquee> 
                <?php echo $mensagem_1 ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $mensagem_2 ?>
            </marquee>
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
                    <a href="videos.php">Vídeos</a>
                    <a href="audio.php">Audio</a>
                </div>
            </div> 
            
            <div class="navbar">
                <a href="oracao.php">Pedido de Oração</a>
                <a href="noticia.php">Notícias</a>
                <a href="atendimento.php">Contato</a>
            </div> 
        </div>  
    </div>
</div>

<div class="area_reserv">
    <h2>Área Administrativa</h2>
</div>

<div class="titulos">
  <p><b>Pedidos de orações enviados</b></p>
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

<div class="remove_oracao">
    <span> <b>Remoção de Pedidos de Oração:</b> Informe um Id inicial e Final e clique sobre o botão remover</span>
    <form class="form_remove_oracao" name="form-oracao" action="db_remove_oracao.php" method="POST">
        <input class="campo" type="text"   name="id_inicial"   placeholder="informe ID inicial" required="required">
        <input class="campo" type="text"   name="id_final"     placeholder="informe ID final"   required="required">
        <input class="campo" type="submit" name="bto_remover"  value="Remover">
    </form>
</div>

<div class="titulos">
    <p><b>Mensagens de Avisos</b></p>
</div>

<?php
    /* seleciona as mensagens de aviso do banco de dados para depois popular nos inputs */
    $dados_msg    = mysqli_fetch_assoc($exec_msg);
    $ds_mesagem_1 = $dados_msg['DS_MENSAGEM1'];
    $ds_mesagem_2 = $dados_msg['DS_MENSAGEM2'];
?>

<div class="mensagem_aviso">
    <span> <b>Mensagens de Avisos:</b> Informe as mensagens que serão apresentadas na página principal e clique sobre o botão gravar.</span>
    <form class="form_aviso" name="form_mensagem_aviso" action="db_atualiza_mensagem_aviso.php" method="POST">
    <label>Primeira Mensagem:</label>  <input class="campo_msg" type="text"    name="ds_mensagem1"   value = "<?php echo($ds_mesagem_1)?>"</br> 
    <label>Segunda Mensagem: </label>  <input class="campo_msg" type="text"    name="ds_mensagem2"   value = "<?php echo($ds_mesagem_2)?>"                                     > 
        <input class="bto-gravar-msg" type="submit"  name="bto_gravar"   value="Atualizar Msg.">
    </form>
</div>

<div class="validar_alteracoes"> 
    <form class="valida_alt" action="sair_reserv.php" method="POST">
        <input class="bto-gravar-msg" type="submit"  name="bto_gravar"   value="Sair">
    </form>
</div>

<?php
    session_destroy();
    include_once('footer.php');
?>
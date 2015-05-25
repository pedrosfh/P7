<?php
23
ob_start();
include_once("extras/variaveis.php");
seguranca();
ob_end_clean();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="Freelancer, Trabalhos Freelancer, Freela, Trabalhos Freela, Trabalho Remoto, Trabalho em Casa, Buscar Projetos, Freelancer PHP, Programador, WebDesigner " />

<meta name="description" content="A Pegasus7 é um escritório online onde empresas contratam, gerenciam e pagam por profissionais independentes." />
<title>Ambiente Online de Trabalho - Pegasus7</title>
<link type="text/css" href="<?php echo $endereco_site; ?>/css/estilos.css" rel="stylesheet" />

<!-- get jQuery from the google apis <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo $endereco_site; ?>/js/jquery.js"></script>
<script src="<?php echo $endereco_site; ?>/css/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo $endereco_site; ?>/js/jquery-ui-1.10.0/css/base/jquery-ui.css" />
<script src="<?php echo $endereco_site; ?>/js/jquery-ui-1.10.0/js/jquery-ui-1.10.0.custom.min.js"></script>



<!-- jQuery UI Bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $endereco_site; ?>/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">


 <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Styles --> 
    <link type="text/css" href="<?php echo $endereco_site; ?>/js/bootstrap/css/custom-theme/jquery-ui-1.9.2.custom.css" rel="stylesheet" />
	<link href="<?php echo $endereco_site; ?>/js/bootstrap/third-party/wijmo/jquery.wijmo-open.1.5.0.css" rel="stylesheet" type="text/css" />

        <!--scripts-->      
        <script type="text/javascript" src="<?php echo $endereco_site; ?>/js/bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>

        <!--wijmo-->
        <script src="<?php echo $endereco_site; ?>/js/bootstrap/third-party/wijmo/jquery.mousewheel.min.js" type="text/javascript"></script>
        <script src="<?php echo $endereco_site; ?>/js/bootstrap/third-party/wijmo/jquery.bgiframe-2.1.3-pre.js" type="text/javascript"></script>
        <script src="<?php echo $endereco_site; ?>/js/bootstrap/third-party/wijmo/jquery.wijmo-open.1.5.0.min.js" type="text/javascript"></script>


   
        <!--init for this page-->
        <script type="text/javascript" src="<?php echo $endereco_site; ?>/js/bootstrap/js/demo.js"></script>
   <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="<?php echo $endereco_site; ?>/js/bootstrap/css/custom-theme/jquery.ui.1.9.2.ie.css"/>
  <![endif]-->   
    

    
 <!-- FIM jQuery UI Bootstrap-->   

<script type="text/javascript" src="<?php echo $endereco_site; ?>/js/toastmessage/javascript/jquery.toastmessage.js"></script>
<script src="<?php echo $endereco_site; ?>/js/raty/lib/jquery.raty.min.js" language="javascript"></script>

      

 <script>
$(function() {
$.fn.raty.defaults.path = '<?php echo $endereco_site; ?>/js/raty/lib/img';
$('.feedback_estrelas').raty({ readOnly: true, score: function(){return $(this).attr('data-score');},  width: 100, space:false });		
	
    $(".progress").each(function() {
        var progressValue = $(this).data("value");
        $(this).progressbar({
            value: progressValue
        }).children("span").appendTo(this);
    });

});
</script>    
	   
<style>
.img_perfil {
  border: 1px solid #CCCCCC;
  border-radius: 6px;
  float: left;
  margin-right: 10px;
}

.nome_perfil a:active, .nome_perfil a:visited, .nome_perfil a:link {
	font-size:14px;
	color:black;
	text-decoration:none;
	font-weight:bold;
	
}

.nome_perfil a:hover {
	text-decoration:underline;	
}

.mais_informacoes_perfil {
	margin-top:2px;
	margin-bottom:5px;	
}





#searchbox {
	position:relative !important;
	margin:0;
background: none !important;
border-style: none;
border-width: 1px;
height: 27px;
overflow: hidden;
padding: 10px;
width: 600px;
z-index:1;
	
}

#search {
  background: none repeat scroll 0 0 #F1F1F1;
  border: 1px solid #A4C3CA;
  border-radius: 5px 5px 5px 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 #FFFFFF;
  font: 13px 'trebuchet MS',arial,helvetica;
  height: 18px;
  padding: 5px 9px;
  width: 270px;
}



#submit {
  background: linear-gradient(#FDAD33, #DC8605) repeat scroll 0 0 #FEB039;
  border-color: #7EBA7C #578E57 #447D43;
  border-radius: 3px 50px 50px 3px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
  color: white;
  cursor: pointer;
  font: bold 14px Arial,Helvetica;
  height: 29px;
  margin: 0 0 0 10px;
  padding: 0;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  width: 85px;
}


.label_botoes_busca {
float: left;
margin-top: 8px;
margin-right: 10px;	
}


.botoes_busca {
	float:left;	
}

.progress.ui-progressbar {position:relative;height:2em;}
.progress span {color:#333333;position:static;margin-top:-2em;text-align:center;display:block;line-height:2em;padding-left:10px;padding-right:10px;}
.progress[aria-valuenow="0"] span {margin-top:0px;}
</style>
	    
</head>

<body>

<div id="header">
<div class="conteudo_header" id="conteudo_header">

<?php include_once("menu_header.php");?>


</div> <!--Fecha #conteudo_header-->

</div> <!--Fecha #header-->
<div class="rodape_header"></div>

<div class="conteudo_corpo">

<?php 
if($mensagens):
echo "<div id='notificacao_mensagem'></div>";
endif;
?>


<?php
if(tipo_usuario($_SESSION['usuario_p7']) == 'Freelancer'){
include_once("templates/freelancer/freelancer.php");	

}elseif(tipo_usuario($_SESSION['usuario_p7']) == 'Contratante'){
include_once("templates/contratante/contratante.php");

}elseif(tipo_usuario($_SESSION['usuario_p7']) == 'Ambos'){
//include_once("templates/ambos.php");
include_once("templates/contratante/contratante.php");
}
?>


	

</div> <!--Fecha .box_cadastro-->

<?php include_once("rodape.php");?>

</body>
</html>


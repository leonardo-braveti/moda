<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name = "format-detection" content = "telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<!--JS-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script> 
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&language=pt-BR"></script>

<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Codigo do MAPA  -->
	<script>		
		$(function(){				
				$("#mapa").gmap3({  					
					marker:{                            						
						address: "<?php echo $eoutros[0]["logradouro"]." , ".$eoutros[0]["bairro"]." , ".$eoutros[0]["cidade"]." , ".$eoutros[0]["estado"]; ?>"   									
					},
                    map:{
						options:{
							zoom: 16
                        }
                    }
				});
				
				
				
		});
        
	</script>	
	<!-- Codigo do MAPA  -->
</head>
<body id="top">
<!--header-->
<header>
    <?php include "menu.php"; ?>
</header>

<div class="global">
<!--content-->
    <div class="container"> 
            <div class="row">
              <article class="span12">				
                  <figure class="map">
                   <div id="mapa" class="gmap3">
							
					</div> 
                   </figure>
              </article>
            <article class="span4">   
				<h2>Localização</h2>
                <div class="info">					
					<h5>Endereço Principal</h5>
                    <p class="meu_endereco"><?php echo $eoutros[0]['logradouro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[0]['bairro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[0]['cidade']." - ".$eoutros[0]['estado']; ?></p>
					<?php 
						$partes = explode("/", $eoutros[0]['telefone1']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[0]['telefone2']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[0]['telefone3']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
					?>   
					
					<br>
					
					<h5>Endereços Alternativos</h5>
					<p class="meu_endereco"><?php echo $eoutros[1]['logradouro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[1]['bairro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[1]['cidade']." - ".$eoutros[0]['estado']; ?></p>
					<?php 
						$partes = explode("/", $eoutros[1]['telefone1']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[1]['telefone2']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[1]['telefone3']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
					?>   
					<br>
					
					<p class="meu_endereco"><?php echo $eoutros[2]['logradouro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[2]['bairro']; ?></p>
					<p class="meu_endereco"><?php echo $eoutros[2]['cidade']." - ".$eoutros[2]['estado']; ?></p>
					<?php 
						$partes = explode("/", $eoutros[2]['telefone1']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[2]['telefone2']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
						
						$partes = explode("/", $eoutros[2]['telefone3']);
						foreach($partes as $p){
						?>
							<p class="meu_endereco"><?php echo trim($p); ?></p>
						<?php
						}
					?>   
					<br>
					                 
					
					<br>
					
					<h5>Redes Sociais</h5>
					<p class="meu_endereco"><?php echo $links['rede1']; ?></p>
					<p class="meu_endereco"><?php echo $links['rede2']; ?></p>					                						
					<p class="meu_endereco"><?php echo $links['rede3']; ?></p>					                						
					<p class="meu_endereco"><?php echo $links['rede4']; ?></p>					                						
					<p class="meu_endereco"><?php echo $links['rede5']; ?></p>					                						
					<br>
					
					<h5>Links</h5>
					<p class="meu_endereco"><?php echo $links['url1']; ?></p>					                						
					<p class="meu_endereco"><?php echo $links['url2']; ?></p>					                						
					<p class="meu_endereco"><?php echo $links['url3']; ?></p>					                						
					<br>
					
					<h5>Whatsapp</h5>
					<p class="meu_endereco"><?php echo $links['whatsapp']; ?></p>					                						
                </div>
				<?php
					/*
					foreach($eoutros as $e){
						?>
						<div class="info">					
							<p class="meu_endereco"><?php echo $e['logradouro']; ?></p>
							<p class="meu_endereco"><?php echo $e['bairro']; ?></p>
							<p class="meu_endereco"><?php echo $e['cidade']." - ".$e['estado']; ?></p>
						</div>
						<?php
					}
					*/
				?>     			
				
				<br>
				<div class="info">			
					<h5>Email</h5>
					<p class="meu_endereco"><?php echo $links['email1']; ?></p>
					<p class="meu_endereco"><?php echo $links['email2']; ?></p>
				</div>
            </article>
            <article class="span8">
                <h2>Contato</h2>
                <form id="contact-form2" action="recebe.php" method="post">
                    
                    <fieldset>                                       
							<div class="campos_form1">
								<span> Nome </span>
								<input type="text" name="nome_form" id="nome_form">
								<br>
								<p class="vazio">*Este campo é obrigatório.</p> 
							</div>							
                            
							<div class="campos_form2">
								<span> E-mail </span>
								<input type="text" name="email_form" id="email_form">
								<br>
								<p class="vazio">*Este campo é obrigatório.</p> 
                            </div>							
							
							<div class="campos_form3">
								<span>Assunto</span>
								<input type="text" name="assunto_form" id="assunto_form">
								<br>
								<p class="vazio">*Este campo é obrigatório.</p>
							</div>		
							
							
							<div class="campos_form4">
								<span> Mensagem </span>
								<textarea name="msg_form" id="msg_form"></textarea>
								<br>
								<p class="vazio">*Este campo é obrigatório.</p>       								
							</div>                        
														
							<div class="campos_form5">			
								<input type = "reset" value= "LIMPAR" class="meu_botao">
								<input type = "submit" id="envia_form" value="ENVIAR" class="meu_botao">
							</div>
                    </fieldset>							
                </form>
				<div class="efetuado">
					<p> Mensagem enviada! Em breve entraremos em contato. </p>
				</div>	
            </article>
            </div>
      </div>
</div>
<!--footer-->
<footer>
  <?php include "rodape.php"; ?>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/meu_envia_form.js"></script>
<script>
    if($.browser.msie && $.browser.version == 8){    
        $('footer #menu li').css({'padding-right':'17px', 'margin-right':'17px'});
        $('.nav-collapse_ .nav > li > a p').css({'display':'none'});
        $('footer .f-logo').css({'width':'170px'}); 
        $('.description em').css({'margin-top':'81px'});
        $('footer p').css({'margin-left':'10px'});
    }
    if($.browser.mozilla){
        $('footer .f-logo').css({'padding-right':'55px'});
    } 
</script>
</body>
</html>
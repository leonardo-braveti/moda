
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt"> <!--<![endif]-->
<?php
		include "../dados_sgbd.php";
?>	
<head>

	<!-- Basic Page Needs
	================================================== -->
		<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
	<title><?php echo $empresa["marca"]; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- CSS
	================================================== -->
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skeleton-wide.css" class="layout">
	
	<!-- mudar aqui -->
	<?php 
		$cor = $config["cor"];		
	?>
	<link rel="stylesheet" href="css/color/<?php echo $cor; ?>.css" class="style">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/colorbox.css">
	<link rel="stylesheet" href="css/flexslider.css">
	
	<style>						
		#sequence .slide1 {	background: url(../uploads/<?php echo $conteudo["imagem1"]; ?>) no-repeat center fixed; }
		#sequence .slide2 {	background: url(../uploads/<?php echo $conteudo["imagem2"]; ?>) no-repeat center fixed; }
		#sequence .slide3 {	background: url(../uploads/<?php echo $conteudo["imagem3"]; ?>) no-repeat center fixed; }
		
		
		
		#clients { 
			background: url(<?php echo "../uploads/".$config["back1"]; ?>) no-repeat center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 
		}
		
		#video {
			background: url(<?php echo "../uploads/".$config["back2"]; ?>) no-repeat center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 
		}
		
		
		#quote { 
			background: url(<?php echo "../uploads/".$config["back3"]; ?>) no-repeat fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 
		}
		
		#contact {
			background: url(<?php echo "../uploads/".$config["back4"]; ?>) no-repeat center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 
		}

	</style>
	


	<!-- Fonts
	================================================== -->

	<link href='http://fonts.googleapis.com/css?family=Oswald:300,400|Lobster|Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>

	<!-- JavaScript
	================================================== -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/twitter/tweet.min.js"></script>
	<script type="text/javascript" src="js/selectnav.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.quote_rotator.js"></script>
	<script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&language=pt-BR"></script>
	

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

	<!-- Codigo do MAPA  -->
	<script>		
		$(function(){				
				$("#mapa").gmap3({  					
					marker:{                            						
						address: "<?php echo $eoutros[0]["logradouro"]." , ".$eoutros[0]["bairro"]." , ".$eoutros[0]["cidade"]." , ".$eoutros[0]["estado"]; ?>",   			
						//address: "Centro, Rio de Janeiro",
					},
                    map:{
						options:{
							zoom: 16
                        }
                    }
				});
				
				
				
		});
        
	</script>
	<style>
		.gmap3{
                margin: 20px auto;
                border: 1px dashed #C0C0C0;
                width: 1000px;
                height: 400px;
        }
		a:link{
			color: white;
		}
		a:hover{
			color: green;
			font-weight: bold;
		}
	</style>
	<!-- Codigo do MAPA  -->
	
</head>
<body>	
	<!-- Header -->
	<header>
		<div class="container">			
			<div id="logo"><a href=""><img src="<?php echo "../uploads/".$empresa["logomarca"]; ?>" alt=""></a></div>			
			<nav>
				<ul id="nav">
					<li class="active"><a href="#home"><?php echo $menu["opc1"]; ?></a></li>
					<li><a href="#about"><?php echo $menu["opc2"]; ?></a></li>
					<li><a href="#team"><?php echo $menu["opc3"]; ?></a></li>
					<li><a href="#services"><?php echo $menu["opc4"]; ?></a></li>
					<li><a href="#portfolio"><?php echo $menu["opc5"]; ?></a></li>
					<li><a href="#contact"><?php echo $menu["opc6"]; ?></a></li>					
				</ul>
			</nav>
		</div>
	</header>
	<!-- END Header -->


	<!-- Home -->
	<div id="home">
		<div id="sequence">
			<ul class="sequence-canvas">

				<li class="animate-in">
					<div class="slide1">
						<div class="pattern">
							<div class="container home">
								<div class="sixteen columns caption-one">
									<h1><?php echo $conteudo["titulo1"]; ?></h1><br>
									<p><?php echo $conteudo["paragrafo1"]; ?></p>
								</div>
							</div>
						</div>	
					</div>
				</li>

				<li>
					<div class="slide2">
						<div class="pattern">
							<div class="container home">
								<div class="sixteen columns caption-one">
									<h1><?php echo $conteudo["titulo2"]; ?></h1><br>
									<p><?php echo $conteudo["paragrafo2"]; ?></p>
								</div>
							</div>
						</div>
					</div>

				</li>

				<li>
					<div class="slide3">
						<div class="pattern">
							<div class="container home">
								<div class="sixteen columns caption-one">
									<h1><?php echo $conteudo["titulo3"]; ?></h1><br>
									<p><?php echo $conteudo["paragrafo3"]; ?></p>
								</div>
							</div>
						</div>
					</div>
				</li>

			</ul>
		</div>

			<ul class="sequence-pagination">
				<li></li>
				<li></li>
				<li></li>
			</ul>

	</div><!-- #home -->
	<!-- END Home -->


	<!-- Ad -->
	<div id="ad">
		<div class="container">
			<div class="twelve columns">
				<h2><?php echo $conteudo["titbarrapreta"]; ?></h2>
				<p><?php echo $conteudo["texbarrapreta"]; ?></p>
			</div>
			<div class="four columns button-wrap">
				<a href="#contact" class="button color medium">FALE CONOSCO</a>
			</div>
			<br class="clear">
		</div><!-- .container -->
	</div><!-- #ad -->
	<!-- END Ad -->


	<!-- About -->
	<div id="about" class="section">
		<div class="container">
			<div class="sixteen columns">
			<h2 class="title"><?php echo $conteudo["titulo4"]; ?></h2>

			
			<div id="slider" class="flexslider2">
				<ul class="slides">
					<li>
						<img src="../uploads/<?php echo $conteudo["imagem4"]; ?>" alt="" />
						
					</li>
					<li>
						<img src="../uploads/<?php echo $conteudo["imagem5"]; ?>" alt="" />
						
					</li>
					<li>
						<img src="../uploads/<?php echo $conteudo["imagem6"]; ?>" alt="" />
						
					</li>
				</ul>
			</div><!-- flexslider -->
			<br>
			<p class="info"><?php echo $conteudo["frase1"]; ?></p> 
		
		<?php 
		/*
			</div><!-- .sixteen columns -->
			<div class="one-third column about">
				<i class="fa fa-lightbulb-o fa-4x"></i>
				<h4>YOUR IDEA</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis laoreet libero ut rhoncus.</p>
			</div>
			<div class="one-third column about">
				<i class="fa fa-cog fa-4x"></i>
				<h4>OUR REALISATION</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis laoreet libero ut rhoncus.</p>
			</div>
			<div class="one-third column about">
				<i class="fa fa-check fa-4x"></i>
				<h4>YOUR SUCCESS</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis laoreet libero ut rhoncus.</p>
			</div>
		*/	
		?>	
		</div><!-- .container -->
	</div><!-- #about -->
	<!-- END About -->
	

	<!-- Clients -->
	<div id="clients">
		<div class="pattern">
			<div class="clients-wrap">
				<div class="container">
					<h3>Nossos clientes:</h3>
					<div class="four columns clients"><a href=""><img class="scale-with-grid" src="../uploads/<?php echo $conteudo["imagem7"]; ?>" alt="" /></a></div>
					<div class="four columns clients"><a href=""><img class="scale-with-grid" src="../uploads/<?php echo $conteudo["imagem8"]; ?>" alt="" /></a></div>
					<div class="four columns clients"><a href=""><img class="scale-with-grid" src="../uploads/<?php echo $conteudo["imagem9"]; ?>" alt="" /></a></div>
					<div class="four columns clients"><a href=""><img class="scale-with-grid" src="../uploads/<?php echo $conteudo["imagem10"]; ?>" alt="" /></a></div>
					<br class="clear">
				</div><!-- container -->
			</div><!-- clients-wrap -->
		</div><!-- pattern -->
	</div><!-- clients -->
	<!-- END Clients -->


	<!-- Team -->
	<div id="team" class="section">
		<div class="container">

			<div class="sixteen columns">
				<h2 class="title"><?php echo $menu["opc3"]; ?></h2>
			</div><!-- sixteen columns -->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../uploads/<?php echo $eoutros[0]["foto_colorida"]; ?>" alt="">
						<img class="top" src="../uploads/<?php echo $eoutros[0]["foto_preto_branco"]; ?>" alt="">
					</div>
					<div class="team-info">
						<h3><?php echo $eoutros[0]["cidade"]." - ".$eoutros[0]["estado"]; ?></h3>
						<h4><?php echo $eoutros[0]["logradouro"]." - ".$eoutros[0]["bairro"]; ?></h4>
						<p><?php echo $eoutros[0]["telefone1"]; ?></p>											
					<?php /*<div class="social">
						<ul>
							<li><a href="" class="facebook"></a></li>
							<li><a href="" class="twitter"></a></li>
							<li><a href="" class="linkedin"></a></li>
						</ul>
					</div> */?><!-- .social -->
					</div><!-- .team-info -->
				</div><!-- .folio -->
			</div><!-- .one-thir column-->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../uploads/<?php echo $eoutros[1]["foto_colorida"]; ?>" alt="">
						<img class="top" src="../uploads/<?php echo $eoutros[1]["foto_preto_branco"]; ?>" alt="">
					</div>
					<div class="team-info">
						<h3><?php echo $eoutros[1]["cidade"]." - ".$eoutros[1]["estado"]; ?></h3>
						<h4><?php echo $eoutros[1]["logradouro"]." - ".$eoutros[1]["bairro"]; ?></h4>
						<p><?php echo  $eoutros[1]["telefone1"]; ?></p>						
					<?php /*<div class="social">
						<ul>
							<li><a href="" class="facebook"></a></li>
							<li><a href="" class="twitter"></a></li>
							<li><a href="" class="linkedin"></a></li>
						</ul>
					</div> */?><!-- .social -->
					</div><!-- .team-info -->
				</div><!-- .folio -->
			</div><!-- one-thir column-->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../uploads/<?php echo $eoutros[2]["foto_colorida"]; ?>" alt="">
						<img class="top" src="../uploads/<?php echo $eoutros[2]["foto_preto_branco"]; ?>" alt="">
					</div>
					<div class="team-info">
						<h3><?php echo $eoutros[2]["cidade"]." - ".$eoutros[2]["estado"]; ?></h3>
						<h4><?php echo $eoutros[2]["logradouro"]." - ".$eoutros[2]["bairro"]; ?></h4>
						<p><?php echo  $eoutros[2]["telefone1"]; ?></p>						
					<?php /*<div class="social">
						<ul>
							<li><a href="" class="facebook"></a></li>
							<li><a href="" class="twitter"></a></li>
							<li><a href="" class="linkedin"></a></li>
						</ul>
					</div> */?><!-- .social -->
					</div><!-- .team-info -->
				</div><!-- .folio -->
			</div><!-- one-thir column folio-->

			<br class="clear">

		</div><!-- .container -->
	</div><!-- #team -->
	<!-- END Team -->


	<!-- Video -->
	<div id="video">
		<div class="pattern">
			<div class="container">
				<div class="sixteen columns">
					<div class="video-padding">
						<h2 class="video-title">Video Institucional</h2>
						
						<div class="video-wrap">
							<?php echo $conteudo['video_url1']; ?>
						</div>
						<?php
							if($conteudo['video_url2']!=""){												
								echo "<div class='video-wrap'>";
									echo $conteudo['video_url2'];									
								echo "</div>";
							}
						?>
						<?php
							if($conteudo['video_url3']!=""){
								echo "<div class='video-wrap'>";
									echo $conteudo['video_url3'];									
								echo "</div>";
							}
						?>
						
					</div><!-- .video-padding -->
				</div><!-- .sixteen columns -->
			</div><!-- .container -->
		</div><!-- .pattern -->
	</div><!-- .video -->
	<!-- END video -->
	


	<!-- Services -->
	<div id="services"  class="section">
		<div class="container">

			<div class="sixteen columns">
				<h2 class="title"><?php echo $menu["opc4"]; ?></h2>				
				<p class="info"><?php echo $conteudo["frase2"]; ?></p>
			</div>

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem11"]; ?>"></i>
					<h4><?php echo $conteudo["titulo5"]; ?></h4>
					<p><?php echo $conteudo["paragrafo4"]; ?></p>
				</div>
			</div>

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem12"]; ?>"></i>
					<h4><?php echo $conteudo["titulo6"]; ?></h4>
					<p><?php echo $conteudo["paragrafo5"]; ?></p>
				</div>
			</div>

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem13"]; ?>"></i>
					<h4><?php echo $conteudo["titulo7"]; ?></h4>
					<p><?php echo $conteudo["paragrafo6"]; ?></p>
				</div>
			</div>

			<br class="clear">

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem14"]; ?>"></i>
					<h4><?php echo $conteudo["titulo8"]; ?></h4>
					<p><?php echo $conteudo["paragrafo7"]; ?></p>
				</div>
			</div>

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem15"]; ?>"></i>
					<h4><?php echo $conteudo["titulo9"]; ?></h4>
					<p><?php echo $conteudo["paragrafo8"]; ?></p>
				</div>
			</div>

			<div class="one-third column">
				<div class="box">
					<img src="../uploads/<?php echo $conteudo["imagem16"]; ?>"></i>
					<h4><?php echo $conteudo["titulo10"]; ?></h4>
					<p><?php echo $conteudo["paragrafo9"]; ?></p>
				</div>
			</div>

			<br class="clear">

		</div><!-- container -->
	</div><!-- services -->
	<!-- END Services -->


	<!-- Quote -->
	<div id="quote">
		<div class="pattern">
			<div class="container">
				<div class="sixteen columns quote-wrap">					
					<ul id="quotes">
						<li><h3><?php echo $conteudo["testemunho1"]; ?></h3><p><?php echo $conteudo["autoria1"]; ?></p></li>
						<li><h3><?php echo $conteudo["testemunho2"]; ?></h3><p><?php echo $conteudo["autoria2"]; ?></p></li>
						<li><h3><?php echo $conteudo["testemunho3"]; ?></h3><p><?php echo $conteudo["autoria3"]; ?></p></li>
					</ul>
				</div><!-- .sixteen columns quote-wrap-->
			</div><!-- .container -->
		</div><!-- .pattern -->
	</div><!-- #quote -->
	<!-- END Quote -->


	<!-- Portfolio -->
	<div id="portfolio" class="section">
		<div class="container">
			<div class="sixteen columns">
				<h2 class="title"><?php echo $menu["opc5"]; ?></h2>
				<p class="info">NOSSOS <span class="color-strong">PRODUTOS</span></p>
			</div>
			<br class="clear">

			<ul id="filter">
				<li class="active"><a href="#" class="all">Tudo</a></li>
				<li><a href="#" class="pictures"><?php echo $secundario["opc1"]; ?></a></li> 
				<li><a href="#" class="videos"><?php echo $secundario["opc2"]; ?></a></li>
				<li><a href="#" class="design"><?php echo $secundario["opc3"]; ?></a></li>
			</ul>
			
			<ul class="ourHolder">
				<!-- ///////////////////////////////////////////////
				CODIGO PARA CRIAR A VISUALIZACAO DAS FOTOS EM PHP
				-->
				<?php					
					$x = 1;
					$y = 110;					
					
					foreach($album as $a){									
						$page =  $a["pagina"]; 						
						$tipo = "";
						switch($page){
							case $secundario["opc1"] : $tipo = "pictures";
							break;
							case $secundario["opc2"] : $tipo = "videos";
							break;
							case $secundario["opc3"] : $tipo = "design";
							break;
						}																	
				?>		
				<li class="four columns" data-id="<?php echo "id-$x"; ?>" data-type="<?php echo $tipo ?>">
					<div class="port">
						<div class="overlay">
							<?php $foto = "../uploads/".$a["foto"]; ?>
							<a class="group1" href="<?php echo $foto; ?>">								
								<div class="caption"><i class="fa fa-search-plus"></i></div>								
								<img class="scale-with-grid" src="<?php echo $foto; ?>" alt="">								
							</a>
						</div>
						<h5><?php echo $a["titulo"]; ?></h5>
						<p><?php echo $a["descricao"]; ?></p>
					</div>
				</li>
				<?php
					if($x % 4 == 0){
						$y++;
						echo "<li class='clear' data-id='id-".$y."'></li>";
					}
						$x++;
					}
				?>	
				<!-- ///////////////////////////////////////////////
				CODIGO PARA CRIAR A VISUALIZACAO DAS FOTOS EM PHP
				-->
			</ul>
			
		</div><!-- container -->
	</div><!-- portfolio -->
	<!-- END Portfolio -->


	<!-- Contact -->
	<div id="contact" class="section">
		<div class="pattern">
			<div class="contact-wrap">
				<div class="container contact-bg">
					<div class="sixteen columns">
						<h2 class="title white">Fale Conosco</h2>
					
						<div id="mapa" class="gmap3">
							
						</div>
					</div>
					
					<br class="clear">

					<div class="ten columns">
						<div class="contactform">
							<form action="index33.html" method="post" name="ContactForm" id="ContactForm" > 
								<label>Nome:</label>
								<input type="text" maxlength="30" id="uname" name="uname" class="form-field">
					
								<label>E-mail:</label>
								<input type="text" maxlength="40" id="uemail" name="uemail" class="form-field">
							  
								<label>Assunto:</label>
								<input type="text" maxlength="100" id="title" name="title" class="form-field">
								
								<label>Telefone(s) de Contato:</label>
								<input type="text" maxlength="100" id="fone" name="fone" class="form-field">
								
								<label>Mensagem:</label>
								<textarea id="message" name="message" rows="6" class="form-field"></textarea>
								<div id="message_post"></div>                            
								<input type="submit" value="ENVIAR" name="submitf" id="submitf" class="button medium color">
								<input type="reset" value="LIMPAR" name="reset" class="button medium color">
							</form>
						</div>
					</div><!-- .ten columns -->

					<div class="six columns">
						<div class="contact-details">
							<h4>Nossos Contatos:</h4>

							<span>Endereço:</span>
								<p>
									<i class="fa fa-road"></i><?php echo $eoutros[0]["logradouro"]; ?><br>
									<i class="fa fa-map-marker"></i><?php echo $eoutros[0]["bairro"]; ?><br>									
									<i class="fa fa-globe"></i><?php echo $eoutros[0]["cidade"]." - ".$eoutros[0]["estado"]; ?><br>									
									<i class="fa fa-envelope"></i><?php echo $empresa["email"]; ?><br>
									<i class="fa fa-road"></i><?php echo $empresa["dir_acesso"]; ?><br>
								</p>   
							
							<?php
								if($eoutros != null){
							?>
									<span>Outros Endereços:</span>
								<?php
									foreach($eoutros as $e){					
										if($e["id"] == 1)
											continue;
										?>
											<p>
												<i class="fa fa-road"></i><?php echo $e["logradouro"]; ?><br>
												<i class="fa fa-map-marker"></i><?php echo $e["bairro"]; ?><br>								
												<i class="fa fa-globe"></i><?php echo $e["cidade"]." - ".$e["estado"]; ?><br><?php 
													
													if($e["telefone1"]!=""){
														$phones = explode("/", $e["telefone1"]);
														foreach($phones as $nums){											
															echo "<i class='fa fa-phone'></i>".trim($nums);
															echo "<br>";
														}
													}	
													if($e["telefone2"]!=""){
														$phones = explode("/", $e["telefone2"]);
														foreach($phones as $nums){											
															echo "<i class='fa fa-phone'></i>".trim($nums);
															echo "<br>";
														}
													}
													if($e["telefone3"]!=""){
														$phones = explode("/", $e["telefone3"]);
														foreach($phones as $nums){											
															echo "<i class='fa fa-phone'></i>".trim($nums);
															echo "<br>";
														}
													}
												?>			
											</p>   
											<br>
										<?php
									}
								}
							?>
								
							<span>Email:</span>
								<p>
									<?php if($links["email1"] != "") ?>
										<i class="fa fa-envelope"></i><?php echo $links["email1"]; ?>									
									<br>	
									<?php if($links["email2"] != "") ?>
									<i class="fa fa-envelope"></i><?php echo $links["email2"]; ?>									
																
								</p>  
							
							<?php if($links["whatsapp"] != "") {?>
								<span>WhatsApp:</span>
								<p>
									<i class="fa fa-envelope"></i><?php echo $links["whatsapp"]; ?>									
								</p>
							<?php } ?>
								
							<!-- redes sociais -->
							<span>Redes Sociais:</span>							
							<div id="social" class="social">								
								<ul>
									<?php
										
										$redes = array("facebook", "twitter", "linkedin", "vimeo" , "behance");										
										foreach($redes as $r){																						
											if($links["rede1"] != ""  && strpos($links["rede1"], $r) > 0){												
												?>
													<li><a href="<?php echo $links["rede1"]; ?>" class="<?php echo $r; ?>"></a></li>
												<?php													
												break;
											}
										}	
										foreach($redes as $r){												
											if($links["rede2"] != ""  && strpos($links["rede2"], $r) > 0){												
												?>
													<li><a href="<?php echo $links["rede2"]; ?>" class="<?php echo $r; ?>"></a></li>
												<?php
												break;												
											}
										}
										foreach($redes as $r){												
											if($links["rede3"] != ""  && strpos($links["rede3"], $r) > 0){												
												?>
													<li><a href="<?php echo $links["rede3"]; ?>" class="<?php echo $r; ?>"></a></li>
												<?php												
												break;
											}
										}	
										foreach($redes as $r){												
											if($links["rede4"] != ""  && strpos($links["rede4"], $r) > 0){												
												?>
													<li><a href="<?php echo $links["rede4"]; ?>" class="<?php echo $r; ?>"></a></li>
												<?php												
												break;
											}
										}	
										foreach($redes as $r){												
											if($links["rede5"] != ""  && strpos($links["rede5"], $r) > 0){												
												?>
													<li><a href="<?php echo $links["rede5"]; ?>" class="<?php echo $r; ?>"></a></li>
												<?php												
												break;
											}
										}	
										
									?>									
								</ul>									
								<br>
							</div><!-- redes sociais -->
						
						</div><!-- .contact-details -->
					</div><!-- .six columns -->

					<br class="clear">

				</div><!-- .container contact-bg -->
			</div><!-- .contact-wrap -->
		</div><!-- .pattern -->
	</div><!-- .contact -->
	<!-- END Contact -->

	<footer>
		<div class="container">
			<div class="sixteen columns copyright">				
				<p>Copyright © 2014 <a target="_blank" href="http://www.modanaweb.com.br">Moda Na Web</a>. Todos os Direitos Reservados.</p>
			</div>
		</div>
	</footer>

</body>
</html>
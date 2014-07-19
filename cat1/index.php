
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
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
	
	<style>
		
		footer a:link, a:visited, a:active {
			color: white;
		}
		footer  a:hover{
			color: <?php echo $cor; ?>;
		}
		#marca_topo {
			float: left;
			padding-left: 10px;
			text-align: center;		
			position: relative;
			top: 17px;
			font-size: 22px;
			font-weight: bold;
		}
		#fale{
			position: fixed;
			float:right;		
			top: 400px;
			z-index:100;		
		}
		#bfcred1{
			z-index:101;
		}
		#bfcred2{
			z-index:101;
		}
		#contact2{
			background-color: black;
		}
		#submitf{
			height: 10px;		
		}
		.bfcvermelho{			
			text-align: center;
			position:relative;
			top: 70px;
		}
		.bfcvermelho2{			
			text-align: center;
			position:relative;
			top:41px;			
		}

		
	</style>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/colorbox.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
	
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
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	

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
						//address: "Centro, Rio de Janeiro
					},
                    map:{
						options:{
							zoom: 16
                        }
                    }
				});
				
				var frame = $('#blockrandom', parent.document).attr("id");
				if(frame != "blockrandom"){
					$("header").css("left", "283px");
					$("#fale").css("left", "1075px");
					$("#fale").css("width", "45px");
				}
				else{
					$("header").css("left", "20px");
					$("#fale").css("left", "780px");
					$("#fale").css("width", "45px");					
				}
				
				
				$("#fale").show();

				$(".single_image").colorbox({scrolling: false});
				
				altura = $("#adesq").css("height");				
				$("#addir").css("height", altura);
				$("#parte1").css("height", altura);	

				function aviso(){
           			altura = $("#adesq").css("height");				
					$("#addir").css("height", altura);
					$("#parte1").css("height", altura);	
        		}		

				window.onresize = aviso;
	
		});

				
        
	</script>
	<style>
		.gmap3{
                margin: 20px auto;
                border: 1px dashed #C0C0C0;
                /*width: 700px;*/
                /*height: 400px;*/
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
	<div id="topo">
		
	</div>
	<a class="single_image" href="contato_popup.php"><img id="fale" src="fale.png"></img></a>	
	<header >
		<div class="container">	
			<div id="marca_topo" class="realce"><?php echo $empresa["marca"]; ?></div>			
			<nav>
				<ul id="nav">
					<li class="active"><a href="#topo"><?php echo $menu["opc1"]; ?></a></li>					
					<li><a href="#portfolio"><?php echo $menu["opc5"]; ?></a></li>
					<li><a href="#team"><?php echo $menu["opc3"]; ?></a></li>
					<li><a href="#contact"><?php echo $menu["opc6"]; ?></a></li>					
				</ul>
			</nav>
		</div>
	</header>
	<!-- END Header -->


	<!-- Home -->
	<div id="home">		
		<img src="../uploads/<?php echo $empresa["banner"];?>"  id="foto_banner" >
	</div><!-- #home -->
	<!-- END Home -->


	<!-- Ad -->
	<div id="ad">
		<div class="container">
			<div class="fourcolumns">
			<div id="parte1">
				<div id="adesq">
					<p><span class='realce titulo'>Endereços</span> </br>
					<?php 
						foreach($eoutros as $e)
							echo "</span>".$e["logradouro"]."  ".$e["bairro"]."  ".$e["cidade"]."</br>";
					?>
					</p>
				</div>
				
				<div id="addir">
					<p>
					<?php 
						echo "<span class='realce titulo'> Endereco de Acesso: </span></br>";
						echo $empresa["dir_acesso"]."</br>";
						echo "<span class='realce titulo'> Email: </span></br>";
						echo $empresa["email"]."</br>";	
					?>
					</p>
				</div>
			</div>
				<div id="adcentro">
					<?php 
						echo "<span class='realce'><strong> Telefone(s) de Contato com a Fábrica: </strong></br>";
						echo $eoutros[0]["telefone1"]."      ".$eoutros[0]["telefone2"]."      ".$eoutros[0]["telefone3"]."</br>";
						$x = 0;
					?>	
					<div id="adcentropeq">
						<?php
							foreach($eoutros as $e){
								if($x==0){
									$x=1;
									continue;
								}
								echo $e["telefone1"]."   ".$e["telefone2"]."   ".$e["telefone3"]."   ";
							}
						?>
					</div>
					</span>
				</div>
						
				<div id="adbot">
					<p><?php echo "<span class='realce'> Descrição da Empresa: </span> ".$conteudo["texbarrapreta"]; ?></p>
				</div>
				
				<div id="adface">
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.modanaweb.com.br%2Fcatalogo%2Fcatsite001%2Fcat1%2F&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
					<br><br>
				</div>
			</div>			
		</div><!-- .container -->
	</div><!-- #ad -->
	<!-- END Ad -->

	<div class="bfcvermelho">
		<a class="single_image" href="contato_popup.php"><img src="bfc.png" id="bfcred1"></a>			
	</div>

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
						<?php if($a["referencia"]!="") {?>
							<p><?php echo "Referência: ".$a["referencia"]; }?></p> 
						<?php if($a["preco"]!="0"){?>
							<p><?php echo "R$: ".$a["preco"]; }?></p>
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

	<div class="bfcvermelho2">
			<a class="single_image" href="contato_popup.php"><img src="bfc.png" id="bfcred2"></a>
	</div>
	<br><br><br><br><br>
	<!-- Team -->
	<div id="team" class="section">
		
		<div class="container">

			<div class="sixteen columns">
				<h2 class="title"><?php echo $menu["opc3"]; ?> </h2>
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

	
	<!-- Contact -->
	<div id="contact" class="section">
		<div class="pattern">
			<div class="contact-wrap">
				<div class="container contact-bg">
					<h2 class="title white">Fale Conosco</h2>
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
								<input type="submit" value="ENVIAR" name="submitf" id="enviar" class="button color">
								<input type="reset" value="LIMPAR" id="limpar" class="button color">
								<span id="resultadinho1"></span>
							</form>
						</div>
					</div><!-- .ten columns -->

					<div class="ten columns">
						
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
						<div class="sixteen columns">
						
					
						<div id="mapa" class="gmap3">
							
						</div>
					</div>
					
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
				<a href="http://www.modanaweb.com.br/webmail" class="pequeno">webmail</a>
				</br>
				<?php 
					$arq = fopen("contador.txt", "a+");
					$num =  fread($arq,100);
					$num++;
					echo "<span class='pequeno realce'> $num </span>";		
					fclose($arq);
					unlink("contador.txt");
					$arq = fopen("contador.txt", "x+");
					fwrite($arq, $num);
				?>
				
			</div>			
		</div>
	</footer>

</body>
</html>
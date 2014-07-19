<!DOCTYPE html>
<html>

<?php include "head.php"; ?>

<meta charset="UTF-8">
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
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<!--header-->

<header>
    <?php include "menu.php"; ?>
</header>

<!--content-->
<div class="global">
    <div class="container">
        <div class="row">
            <section class="span12 margBot2">
                <div class="row">
                     <article class="span4">
                        <h2>a empresa</h2>
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/page2_pic5.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3>Sobre nós</h3>
                                    <p><?php echo $empresa["marca"]; ?></p>
                                </div>
                            </div>
                        </div>
                     </article>
                     <article class="span4">
                        <h2>nossa missão</h2>
                        <h3>Dadipiscing elit. Praesent vestibuluacus.</h3>
                        <p class="margBot">Aenean nonummy hendrerit mauris. Phasellus po. Fusce suscipit varius mi. Cum sem. Duis ultrici pharetra magna. Donec accumsan malesuada orcinec sit amet eros.</p>
                        <h3>Suspendisse sollicitudin velit sed leo pharetra</h3>
                        <p class="margBot">Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan.</p>
                        <h3>Lorem ipsum dolor sit amet consecte</h3>
                        <p>Donec sit amet eros. Lorem ipsum dolor sit amet, consect etuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elemen tum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                     </article>
                     <article class="span4">
                        <h2>Proposta</h2>
                        <div class="thumb-pad2">
                            <div class="thumbnail">
                                <figure><img src="img/page2_pic6.jpg" alt=""></figure>
                                <div class="caption">
                                    <h3>Aliquam dapibus tincidunt metus praesent</h3>
                                    <p class="margBot">Aenean nonummy hendrerit mauris. Phasellus po. Fusce suscipit varius mi. Cum sem. Duis ultrici pharetra magna.</p>
                                    <h3>Incidunt ut labore et dolore magnam aliquam</h3>
                                    <p>Morbi nunc odio gravida atcursus nec uctus a lorem. Maecenas tristique orcc sem. Duis ultrici pharetra magna. Donec accumsan malesuada orci.nec sit ame.</p>
                                </div>
                            </div>
                        </div>
                     </article>
                </div>
            </section>
            <section class="span12">
                <h2 class="margBot4">Nossas Lojas</h2>
                <div class="row">                    
					<?php
						foreach($eoutros as $e){
					?>
							<article class="span3 profess1">
								<div class="thumb-pad2">
									<div class="thumbnail">						
										<?php $caminho = "../uploads/"; ?>
										<figure><img src="<?php echo $caminho.$e['foto_colorida']; ?>" alt=""></figure>
										<div class="caption">
											<h3><?php echo $e['cidade']." - ".$e['estado']; ?></h3>
											<p><?php echo $e['logradouro']." ".$e['bairro'] ; ?> </p>
										</div>
									</div>
								</div>
							</article>                    
					<?php
						}
					?>
                </div>
            </section>
         </div>
    </div>
</div>
<!--footer-->
<footer>
  <?php include "rodape.php"; ?>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
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
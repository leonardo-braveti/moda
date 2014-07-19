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

<div class="global">
    <!--content-->
    <div class="container">
        <div class="row">
            <article class="span8">
                <h2>saiba como revender nossa marca</h2>
                <div class="thumb-pad1">                    
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem11'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo5"]; ?></h3>
									<?php /*<div>
										<p>
											<time datetime="2013-01-01">Sunday, September 22, 2013</time><em>|</em>posted by: <a href="#">admin</a><em>|</em>comments: <a href="#">7</a>
										</p>
									</div>*/ ?>
									<p class="margBot4"><?php echo $conteudo["paragrafo4"]; ?></p>
									<br><br>
									<!--<a href="#" class="btn btn-link">read more</a>-->
								</div>
							</div>   
							<br>
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem12'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo6"]; ?></h3>									
									<p class="margBot4"><?php echo $conteudo["paragrafo5"]; ?></p>
									<br><br>									
								</div>
							</div>   
							<br>
							
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem13'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo7"]; ?></h3>									
									<p class="margBot4"><?php echo $conteudo["paragrafo6"]; ?></p>
									<br><br>									
								</div>
							</div>   
							<br>
							
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem14'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo8"]; ?></h3>									
									<p class="margBot4"><?php $conteudo["paragrafo7"]; ?></p>
									<br><br>									
								</div>
							</div>   
							<br>
							
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem15'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo9"]; ?></h3>									
									<p class="margBot4"><?php echo $conteudo["paragrafo8"]; ?></p>
									<br><br>									
								</div>
							</div>   
							<br>
							
							<div class="thumbnail">
								<figure><img src="../uploads/<?php echo $conteudo['imagem16'];?>" alt=""></figure>
								<div class="caption">
									<br><br><br>
									<h3><?php echo $conteudo["titulo10"]; ?></h3>									
									<p class="margBot4"><?php $conteudo["paragrafo9"]; ?></p>									
								</div>
							</div>   
							<br>
							
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
<script>
    if($.browser.msie && $.browser.version == 8){    
        $('footer #menu li').css({'padding-right':'17px', 'margin-right':'17px'});
        //$('.nav-collapse_ .nav > li > a p').css({'display':'none'});
        $('footer .f-logo').css({'width':'170px'}); 
        $('.description em').css({'margin-top':'81px'});
        $('footer p').css({'margin-left':'10px'});
        $('.thumb-pad1 .thumbnail .caption p em').css({'margin-left':'8px', 'margin-right':'8px'});
    }
    if($.browser.mozilla){
        $('footer .f-logo').css({'padding-right':'55px'});
    } 
</script>
</body>
</html>
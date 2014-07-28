<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt"> <!--<![endif]-->
﻿
	
<head>

	<!-- Basic Page Needs
	================================================== -->
		<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8" />
	<title>Moda Na Web</title>
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
		<link rel="stylesheet" href="css/color/blue.css" class="style">
	
	<style>
		
		footer a:link, a:visited, a:active {
			color: white;
		}
		footer  a:hover{
			color: blue;
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
		#contact2{
			background-color: black;
		}
		#submitf{
			height: 10px;
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
						address: "Rua Teste, 10 , Bairro Teste , Rio de Janeiro , RJ",   			
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
			
				
				
				
				
				$("#single_image").colorbox({scrolling: false});
			
				altura = $("#adesq").css("height");				
				$("#addir").css("height", altura);
				$("#parte1").css("height", altura);
				
				
				
				
				
				
				
		});
        
	</script>
	<style>
		.gmap3{
                margin: 20px auto;
                border: 1px dashed #C0C0C0;
                width: 700px;
                height: 400px;
        }
		a:link{
			color: white;
		}
		a:hover{
			color: green;
			font-weight: bold;
		}
	.meio {
	text-align: center;
}
    #portfolio .container .ourHolder {
	text-align: center;
}
    </style>
	<!-- Codigo do MAPA  -->
	
</head>
<body>	
	<!-- Header -->
	<div id="topo">
		
	</div>
	<a id="single_image" href="contato_popup.php"><img id="fale" src="fale.png"></a>	
	<header >
		<div class="container">	
			
  <div id="marca_topo" class="realce">
    Moda Na Web  </div>			
			<nav>
				<ul id="nav">
					<li class="active"><a href="#topo">Inicial</a></li>					
					<li><a href="#portfolio">Portfólio</a></li>
					<li><a href="#team">Nossa Loja</a></li>
					<li><a href="#contact">Contato</a></li>					
				</ul>
			</nav>
		</div>
	</header>
	<!-- END Header -->


	<!-- Home -->
	<div id="home">		
		<img src="../admin/uploads/25e5c53ba46cbc5d51d2f76f3f61fbb84e536def2.jpg">
	</div><!-- #home -->
	<!-- END Home -->


	<!-- Ad -->
	<div id="ad">
		<div class="container">
			<div class="fourcolumns">
			<div id="parte1">
				<div id="adesq">
					<p><span class='realce titulo'>Endereços</span> </br>
					</span>Rua Teste, 10  Bairro Teste  Rio de Janeiro</br></span>Rua fabrica de ideias, 300  Bairro Ideias  Rio de Janeiro</br></span>Rua Aureliano Coutinho - nº15 e 271  Centro  Duque de Caxias</br>					</p>
				</div>
				
				<div id="addir">
					<p>
					<span class='realce titulo'> Endereco de Acesso: </span></br>http://www.modanaweb.com.br/modanaweb</br><span class='realce titulo'> Email: </span></br>comercial@modanaweb.com.br</br>					</p>
				</div>
			</div>
								<div id="adcentro">
					<span class='realce'><strong> Telefone(s) de Contato com a Fábrica: </strong></br>(21) 3181-0284      (21) 9 9340-6798      (21) 7756-5778</br>	
					<div id="adcentropeq">
						(21) 9999-9999   (21) 8888-8888   (21) 5555-5555   21 2771717171   (21) 8888-8888   21 8989898989   					</div>
					</span>
				</div>
						
				<div id="adbot">
					<p><span class='realce'> Descrição da Empresa: </span> 0</p>
				</div>
				
				<div id="adface">
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.modanaweb.com.br%2Fcatalogo%2Fcatsite001%2Fcat1%2F&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
					<br><br>
				</div>
			</div>			
		</div><!-- .container -->
	</div><!-- #ad -->
	<!-- END Ad -->
	<br><br><br><br><br>
	<!-- Portfolio -->
	<div id="portfolio" class="section">
  <div class="container">
			<div class="sixteen columns">
				<h2 class="title">Portfólio</h2>
				<p class="info">NOSSOS <span class="color-strong">PRODUTOS</span></p>
			</div>
			<br class="clear">

	  <ul id="filter">
				<li class="active"><a href="#" class="all">Tudo</a></li>
				<li><a href="#" class="pictures">Coleção 1</a></li> 
				<li><a href="#" class="videos">Coleção 2</a></li>
				<li><a href="#" class="design">Coleção 3</a></li>
			</ul>
			
	  
    <ul class="ourHolder">
      <!-- ///////////////////////////////////////////////
				CODIGO PARA CRIAR A VISUALIZACAO DAS FOTOS EM PHP
				-->
            <li class="four columns" data-id="id-1" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/b07b1031dabd24d9f12ad6aacf51ba1376d16eab1.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/b07b1031dabd24d9f12ad6aacf51ba1376d16eab1.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-2" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/ac3d8a7dbb2afc0224e2a159368472efc3e63ff6.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/ac3d8a7dbb2afc0224e2a159368472efc3e63ff6.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-3" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/f531b131b4962041db9e250e9b1534f8c164b9ee2.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/f531b131b4962041db9e250e9b1534f8c164b9ee2.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-4" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/52abbdfae12406fdccdc24e74410b9115c83878f.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/52abbdfae12406fdccdc24e74410b9115c83878f.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
      <li class='clear' data-id='id-111'></li>      <li class="four columns" data-id="id-5" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/8aadbdf59ce0eda2c66372c055395f27fad0bede.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/8aadbdf59ce0eda2c66372c055395f27fad0bede.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-6" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/2cec6a27c46127c2b2aa79b52dfd03e882afbadc1.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/2cec6a27c46127c2b2aa79b52dfd03e882afbadc1.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-7" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/e15d9b402694f24297d45bfc08dea3276e593f6b.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/e15d9b402694f24297d45bfc08dea3276e593f6b.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-8" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/d55349a57e6bb125f05e23d1855953ce2e7f8907.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/d55349a57e6bb125f05e23d1855953ce2e7f8907.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
      <li class='clear' data-id='id-112'></li>      <li class="four columns" data-id="id-9" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/69f64a0d5ccf1c00fd8f867e287c6f43f4851d5b.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/69f64a0d5ccf1c00fd8f867e287c6f43f4851d5b.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-10" data-type="pictures"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/11adc4d39a863442faed8b9bd7033e6195244c6f.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/11adc4d39a863442faed8b9bd7033e6195244c6f.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-11" data-type="videos"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/3201e722049d2bfeb8f32dfdce0f6f770f15469c2.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/3201e722049d2bfeb8f32dfdce0f6f770f15469c2.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-12" data-type="videos"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/f531b131b4962041db9e250e9b1534f8c164b9ee1.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/f531b131b4962041db9e250e9b1534f8c164b9ee1.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
      <li class='clear' data-id='id-113'></li>      <li class="four columns" data-id="id-13" data-type="videos"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/e393775f8abf249012fa74c0f56d0caac1bcc0741.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/e393775f8abf249012fa74c0f56d0caac1bcc0741.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-14" data-type="videos"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/8d544ca10a9876db48192df5d4a62ccffd05a2fb.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/8d544ca10a9876db48192df5d4a62ccffd05a2fb.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-15" data-type="videos"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/11adc4d39a863442faed8b9bd7033e6195244c6f1.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/11adc4d39a863442faed8b9bd7033e6195244c6f1.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-16" data-type="design"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/7054278561ea25aef18d552e95f02012c018811b4.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/7054278561ea25aef18d552e95f02012c018811b4.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
      <li class='clear' data-id='id-114'></li>      <li class="four columns" data-id="id-17" data-type="design"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/16b548938e7096e621647b102b93eb81bc06ab901.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/16b548938e7096e621647b102b93eb81bc06ab901.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-18" data-type="design"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/2daa7185205c9350c3fdbd1ef920f1ab8a0599684.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/2daa7185205c9350c3fdbd1ef920f1ab8a0599684.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-19" data-type="design"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/e5ac19cac06dcf0525c0a5c992ca7b46d56cc79e.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/e5ac19cac06dcf0525c0a5c992ca7b46d56cc79e.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
            <li class="four columns" data-id="id-20" data-type="design"> 
        <div class="port"> 
          <div class="overlay"> 
                        <a class="group1" href="../admin/uploads/816dcc5282c16f719f143af10b8e4cdc4c141fec1.jpg"> 
            <div class="caption"><i class="fa fa-search-plus"></i></div>
            <img class="scale-with-grid" src="../admin/uploads/816dcc5282c16f719f143af10b8e4cdc4c141fec1.jpg" alt=""> </a> 
          </div>
          <h5> 
                      </h5>
          <p> 
                      </p>
                    </p>
                    </p>
        </div>
      </li>
      <li class='clear' data-id='id-115'></li>      <!-- ///////////////////////////////////////////////
				CODIGO PARA CRIAR A VISUALIZACAO DAS FOTOS EM PHP
				-->
    </ul>
	</div><!-- container -->
	</div><!-- portfolio -->
	<!-- END Portfolio -->

	<!-- Team -->
	<div id="team" class="section">
		<div class="container">

			<div class="sixteen columns">
				<h2 class="title">Nossa Loja </h2>
			</div><!-- sixteen columns -->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../admin/uploads/f25962134d50d181cca66afa8ed5d0f670a73fab25.jpg" alt="">
						<img class="top" src="../admin/uploads/7054278561ea25aef18d552e95f02012c018811b2.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Rio de Janeiro - RJ</h3>
						<h4>Rua Teste, 10 - Bairro Teste</h4>
						<p>(21) 3181-0284</p>											
					<!-- .social -->
					</div><!-- .team-info -->
				</div><!-- .folio -->
			</div><!-- .one-thir column-->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../admin/uploads/4145845106e50f9e079a7ddd8e6f57c672780505.jpg" alt="">
						<img class="top" src="../admin/uploads/4145845106e50f9e079a7ddd8e6f57c6727805051.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Rio de Janeiro - RJ</h3>
						<h4>Rua fabrica de ideias, 300 - Bairro Ideias</h4>
						<p>(21) 9999-9999</p>						
					<!-- .social -->
					</div><!-- .team-info -->
				</div><!-- .folio -->
			</div><!-- one-thir column-->

			<div class="one-third column">
				<div class="folio">
					<div class="folioimg">
						<img src="../admin/uploads/443e935e2b85b969c8e552de4256653e2ab0d28c.jpg" alt="">
						<img class="top" src="../admin/uploads/443e935e2b85b969c8e552de4256653e2ab0d28c1.jpg" alt="">
					</div>
					<div class="team-info">
						<h3>Duque de Caxias - RJ</h3>
						<h4>Rua Aureliano Coutinho - nº15 e 271 - Centro</h4>
						<p>21 2771717171</p>						
					<!-- .social -->
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
								<input type="submit" value="ENVIAR" name="submitf" id="enviar" class="button color">
								<input type="reset" value="LIMPAR" id="limpar" class="button color">
							</form>
						</div>
					</div><!-- .ten columns -->

					<div class="six columns">
						<div class="contact-details">
							<h4>Nossos Contatos:</h4>

							<span>Endereço:</span>
								<p>
									<i class="fa fa-road"></i>Rua Teste, 10<br>
									<i class="fa fa-map-marker"></i>Bairro Teste<br>									
									<i class="fa fa-globe"></i>Rio de Janeiro - RJ<br>									
									<i class="fa fa-envelope"></i>comercial@modanaweb.com.br<br>
									<i class="fa fa-road"></i>http://www.modanaweb.com.br/modanaweb<br>
								</p>   
							
																<span>Outros Endereços:</span>
																			<p>
												<i class="fa fa-road"></i>Rua fabrica de ideias, 300<br>
												<i class="fa fa-map-marker"></i>Bairro Ideias<br>								
												<i class="fa fa-globe"></i>Rio de Janeiro - RJ<br><i class='fa fa-phone'></i>(21) 9999-9999<br><i class='fa fa-phone'></i>(21) 8888-8888<br><i class='fa fa-phone'></i>(21) 5555-5555<br>			
											</p>   
											<br>
																					<p>
												<i class="fa fa-road"></i>Rua Aureliano Coutinho - nº15 e 271<br>
												<i class="fa fa-map-marker"></i>Centro<br>								
												<i class="fa fa-globe"></i>Duque de Caxias - RJ<br><i class='fa fa-phone'></i>21 2771717171<br><i class='fa fa-phone'></i>(21) 8888-8888<br><i class='fa fa-phone'></i>21 8989898989<br>			
											</p>   
											<br>
																		
							<span>Email:</span>
								<p>
																			<i class="fa fa-envelope"></i>comercial@modanaweb.com.br									
									<br>	
																		<i class="fa fa-envelope"></i>									
																
								</p>  
							
															<span>WhatsApp:</span>
								<p>
									<i class="fa fa-envelope"></i>888888888888									
								</p>
															
							<!-- redes sociais -->
							<span>Redes Sociais:</span>							
							<div id="social" class="social">								
								<ul>
																						<li><a href="https://www.facebook.com/Oficial.ModanaWeb" class="facebook"></a></li>
																									<li><a href="https://twitter.com/modanaweb" class="twitter"></a></li>
																					
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
				<a href="http://www.modanaweb.com.br/webmail" class="pequeno">webmail</a>
				</br>
				<span class='pequeno realce'> 643 </span>				
			</div>			
		</div>
	</footer>

</body>
</html>
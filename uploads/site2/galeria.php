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
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<!--JS-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>	
<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script>
       $(window).load(function() {
         // Initialize the gallery
        $('.isotopeGall .element a').touchTouch();
      });
</script>
<script>
    $(window).load(function() {  
    var $container = $('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    $container.imagesLoaded( function(){

        $container.isotope({
            // options
            itemSelector : '.element',	
            layoutMode : 'masonry',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = $browserWidth;
                return Math.floor(containerWidth / $cols);
              }
        });
    });
    
	    // update columnWidth on window resize
    $(window).smartresize(function(){  
        updateSize();
        $container.isotope( 'reLayout' );
    });
	
    //Set item size
    function updateSize() {
        $browserWidth = $container.width();
        $cols = 4;

        if ($browserWidth >= 1200) {
            $cols = 4;
        }
        else if ($browserWidth >= 800 && $browserWidth < 1200) {
            $cols = 4;
        }
        else if ($browserWidth >= 480 && $browserWidth < 800) {
            $cols = 3;
        }
        else if ($browserWidth >= 320 && $browserWidth < 480) {
            $cols = 2;
        }
        else if ($browserWidth < 401) {
            $cols = 2;
        }
        //console.log("Browser width is:" + $browserWidth);
        //console.log("Cols is:" + $cols);

        // $gutterTotal = $cols * 20;
		$browserWidth = $browserWidth; // - $gutterTotal;
        $itemWidth = $browserWidth / $cols;
        $itemWidth = Math.floor($itemWidth);

        $(".element").each(function(index){
            $(this).css({"width":$itemWidth+"px"});             
        });
			

    
	  var $optionSets = $('#options .option-set'),
	      $optionLinks = $optionSets.find('a');

	  $optionLinks.click(function(){
	    var $this = $(this);
	    // don't proceed if already selected
	    if ( $this.hasClass('selected') ) {
	      return false;
	    }
	    var $optionSet = $this.parents('.option-set');
	    $optionSet.find('.selected').removeClass('selected');
	    $this.addClass('selected');

	    // make option object dynamically, i.e. { filter: '.my-filter-class' }
	    var options = {},
	        key = $optionSet.attr('data-option-key'),
	        value = $this.attr('data-option-value');
	    // parse 'false' as false boolean
	    value = value === 'false' ? false : value;
	    options[ key ] = value;
	    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	      // changes in layout modes need extra logic
	      changeLayoutMode( $this, options )
	    } else {
	      // otherwise, apply new options
	      $container.isotope( options );
	    }
	    
	    return false;
	  });		
    };
    
    });
</script>
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
            <div class="span12 isotopeGall margTop">
                <div id="container" class="clearfix margBot3">
                    <?php
						foreach($album as $f){
							?>
								<div class="element transition term" data-category="transition">
									<?php 
										$photo = $f["foto"]; 
										$local = "../uploads/".$photo;
									?>
									<a href="<?php echo $local; ?>" class="thumbnail"><img src="<?php echo $local; ?>" alt="">
										<p class="description2">
											<?php echo trim($f["descricao"]); ?><strong></strong>
											<br>
											<?php echo "R$ ".$f["preco"]; ?>
										</p>
									</a>
								</div>							
							<?php							
						}
					?>
                </div>
                <div class="borderBottom"><span class="fleft"></span><span class="fright"></span></div>                
            </div>
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
    }
    if($.browser.mozilla){
        $('footer .f-logo').css({'padding-right':'55px'});
    } 
</script>
</body>

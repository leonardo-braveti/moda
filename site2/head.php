<head>

<?php include "../dados_sgbd.php"; ?>
<title><?php echo $empresa["marca"]; ?></title>

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
<link rel="stylesheet" href="css/brave.css" type="text/css" media="screen">
<!--JS-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>	
<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
      <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
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
  	<!--[if lt IE 8]>
    		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
   	<![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

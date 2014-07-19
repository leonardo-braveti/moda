<!DOCTYPE html>
<html lang="en">
<head>
<title>Search results</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
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
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<!--header-->
<header>
    <div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                        <h1><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
                        <div class="nav-collapse nav-collapse_ collapse">
                        	<ul class="nav sf-menu clearfix">
                        	  <li data-title="home"><a href="index.html">Home <span>welcome</span></a></li> 
                              <li data-title="about"><a href="index-1.html">about <span>studio</span><p>></p></a>
                                <ul>
                                    <li><a href="#">studio</a></li>
                                    <li><a href="#">team</a></li>
                                    <li><a href="#">news <span>></span></a>
                                        <ul>
                                            <li><a href="#">new</a></li>
                                            <li><a href="#">latest</a></li>
                                            <li class="last"><a href="#">archive</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">awards</a></li>
                                    <li class="last"><a href="#">folio</a></li>
                                </ul>
                              </li> 
                              <li data-title="gallery"><a href="index-2.html">gallery <span>latest works</span></a></li> 
                              <li data-title="blog"><a href="index-3.html">blog <span>articles</span></a></li> 
                              <li data-title="contacts"><a href="index-4.html">contacts <span>mail us</span></a></li>                       
                            </ul>
                        </div>                                                                                                                   
                  </div>
             </div>  
         </div>
    </div>
    <div class="border"></div>
</header>
<div class="global">
    <!--content-->
    <div class="container">
    <div class="row">
      <article class="span12">
        <h2>Search result:</h2>
        <div id="search-results"></div>
      </article>
    </div>
    </div>
</div>
<!--footer-->
<footer>
  <div class="container">
	     <div class="row">
	         <article class="span2 f-logo">  
                <h1><a href="index.html"><img src="img/logo.png" alt=""></a></h1>
            </article>
            <article class="span3"> 
                <p>Monica &copy; 2013 &bull; <a href="index-5.html">Privacy Policy</a></p> 
            </article>
            <article class="span5 f-menu">
                <ul id="menu">
                    <li><a href="index.html">home</a></li> 
                    <li><a href="index-1.html">about</a></li> 
                    <li><a href="index-2.html">gallery</a></li> 
                    <li><a href="index-3.html">blog</a></li> 
                    <li class="last"><a href="index-4.html">contacts</a></li> 
                </ul>
            </article> 
       </div>
  </div>    
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
</html>
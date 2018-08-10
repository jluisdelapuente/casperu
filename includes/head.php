<?php
//Cabezera
?>

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Corporacion Ascad & Semastec S.A.C.</title>
	<meta name="description" content="Corporación Ascad & Semastec S.A.C. - HTML Template">
	<meta name="author" content="Blueowlcreative.com">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/style.css">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>	

	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="stylesheets/sequencejs-theme.sliding-horizontal-parallax-ie.css" /><![endif]-->

	<link rel="stylesheet" href="stylesheets/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="stylesheets/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="stylesheets/carousel.css" type="text/css" media="screen" />
	
	<!-- JS
  ================================================== -->	
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	
	
	<script type="text/javascript" src="js/sequence.jquery-min.js"></script>	
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>

	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.tipsy.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico">

</head>
<body>
  <div id="wrapper">
  
	<div class="container">
	
		<div class="header clearfix row">
			<div class="eight columns header_left">
				<a href="./index.php"><img src="images/logo.jpg"/></a>
			</div>
			<div class="eight columns">
				<div class="header_right">
					<div class="header_contacts clearfix">
						<div class="header_phone">+ (511) 791-4687 / 310-4680</div>
						<div class="header_mail">informes@casperu.net</div>
					</div>
					<div class="header_soc_search clearfix">
						<div class="header_search">
							<form class="search" action="" method="get">
								<button class="button_search"></button>
								<input name="s" id="s" type="text" value="Buscar..." onclick="this.value = '';"></span>
							</form>
						</div>
						
        <a href="https://www.facebook.com/ascadsemastec" class="header_soc_fb" id="soc_fb">Facebook</a>
        <a href="https://twitter.com/jluisdelapuente" class="header_soc_twitter" id="soc_twitter">Twitter</a>
        <a href="#myModal" role="button" data-toggle="modal" class="header_soc_rss" >Login</a>
      <!--  <a href="#myModal" role="button" data-toggle="modal">Login</a>-->
						

					</div>				
				</div>
			</div>
		</div>
		

            
		<!-- Main Navigation -->
		<div class="row no_bm">
			<div class="sixteen columns">
				<div id="menu">
					<ul>
                                            <li><a href="./index.php"><span class="home_icon"></span></a></li>
                                            <li><a href="./index.php">Inicio<span></span></a>
					       
					    </li>
					    <li><a href="./empresa.php">Nosotros<span></span></a>
					    	
					    </li>
					  	<li><a href="./servicios.php">Servicios<span></span></a>
                                                </li>
					    <li><a href="./blog.php">Capacitación<span></span></a>
					    	<div>
					        <ul>
							<li><a href="#"><span>Curso Virtuales</span></a></li>         
							<li><a href="#"><span>Curso Presencial</span></a></li>
							<li><a href="#"><span>Seminarios </span></a></li>
                                                </ul>
					       </div>
					    </li>
					    <li><a href="./blog.php">Blog<span></span></a>
					    			    
					    </li>
					    <li><a href="./contacto.php">Contactanos</a></li>
					</ul>
				</div>
				
				
				<select id="select_menu" onchange="location = this.value">
			  	<option value="">Seleccione Pagina</option>
			        <option value="./index.php">Inicio</option>
			        
			        <option value="./empresa.php">Nosotros</option>

	
			        <option value="./servicios.php">Servicios</option>

			        
			        <option value="./blog.php">Capacitaciones</option>
			        <option value="#">&nbsp;&nbsp;&nbsp;&nbsp;Cursos Virtuales</option>
			        <option value="#">&nbsp;&nbsp;&nbsp;&nbsp;Cursos Presenciales</option>
			        <option value="#">&nbsp;&nbsp;&nbsp;&nbsp;Seminarios</option>
	        
			   
			        <option value="./blog.php">Blog</option>
			         
			        <option value="./contacto.php">Contactanos</option>  
			    </select>
						
			</div>
		</div>
		<!-- Main Navigation::END -->
		
		
	
		<!-- Sequence Slider --> 
		<div class="h15 clear"></div>	
		<script type="text/javascript">	
			var preloader = ($.browser.msie) ? false : true ;
			
			$(document).ready(function(){
				var options = {
					autoPlay: true,
					autoPlayDelay: 5000,
					nextButton: true,
					prevButton: true,
					preloader: preloader,
					animateStartingFrameIn: true,
					transitionThreshold: 500,
					fallback: {
			        	theme: "slide",
			        	speed: 500
			        }
				};
				
				var sequence = $("#sequence").sequence(options).data("sequence");
	
				sequence.afterLoaded = function(){
					$(".info").css('display','block');
					$("#sequence").hover(
					        function() {
					        	$(".prev, .next").stop().animate({opacity:0.7},300);	            
					        },
					        function() {        
					        	$(".prev, .next").stop().animate({opacity:0},300);
					        }
					);
					
					$(".prev, .next").hover(
					        function() {
					        	$(this).stop().animate({opacity:1},200);	            
					        },
					        function() {        
					        	$(this).stop().animate({opacity:0.7},200);
					        }		
					);
				}
			})
		</script>
                
                </div>
      </div>
    
   <!--modal for login form starts 
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login with Appplechic</h3>
  </div>
  <div class="modal-body"> 
    -->
    <!--form starts 
    <div class="row">
      <div class="span5">
        <form method="post" action="http://tanshcreative.com/applechic-st-demo/.">
          <fieldset>
            <p>
              <label>Username</label>
              <input name="name"  type="text" placeholder="Username">
            </p>
            <p>
              <label>Password</label>
              <input name="password"  type="password" placeholder="Password">
            </p>
            <p>
              <input type="submit" value="Login" class="submit"/>
            </p>
          </fieldset>
        </form>
        <div class="clearfix"></div>
        <p><a href="#">Forgot username / password?</a> | <a href="#">Login with Facebook</a></p>
      </div>
    </div>
    
    
  </div>
</div>-->
     <!--form starts-->
<!--modal for login form ends -->  
</body>
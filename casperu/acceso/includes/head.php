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
								<input name="s" id="s" type="text" value="Search ..." onclick="this.value = '';"></span>
							</form>
						</div>
						
						
						<a href="https://www.facebook.com/ascadsemastec" class="header_soc_fb" id="soc_fb">Facebook</a>
						<a href="" class="header_soc_twitter" id="soc_twitter">Twitter</a>
						

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
					    <li><a href="./capacitacion.php">Capacitación<span></span></a>
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
					    <li><a href="./contacto.php">Contacto</a></li>
					</ul>
				</div>
				
				
				<select id="select_menu" onchange="location = this.value">
			  	<option value="">Select Page</option>
			        <option value="index.php">Home</option>
			        <option value="index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home Version 1</option>
			        <option value="index2.php">&nbsp;&nbsp;&nbsp;&nbsp;Home Version 2</option>
			        <option value="index3.php">&nbsp;&nbsp;&nbsp;&nbsp;Home Version 3</option>
			        
			        <option value="services.php">Page Templates</option>
			        <option value="services.php">&nbsp;&nbsp;&nbsp;&nbsp;Services</option>
			        <option value="about.php">&nbsp;&nbsp;&nbsp;&nbsp;About Us</option>
			        <option value="page_left_sidebar.php">&nbsp;&nbsp;&nbsp;&nbsp;Left Sidebar Page</option>
			        <option value="page_right_sidebar.php">&nbsp;&nbsp;&nbsp;&nbsp;Right Sidebar Page</option>
			        <option value="search_results.php">&nbsp;&nbsp;&nbsp;&nbsp;Search Results</option>
			        <option value="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</option>
	
			        <option value="elements.php">Features</option>
			        <option value="elements.php">&nbsp;&nbsp;&nbsp;&nbsp;Elements</option>
			        <option value="columns.php">&nbsp;&nbsp;&nbsp;&nbsp;Columns</option>
			        <option value="sliders.php">&nbsp;&nbsp;&nbsp;&nbsp;Sliders</option>
			        <option value="media.php">&nbsp;&nbsp;&nbsp;&nbsp;Media</option>
			        <option value="elements.php">&nbsp;&nbsp;&nbsp;&nbsp;Multi-Level Menu</option>
			        <option value="columns.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item One</option>
			        <option value="media.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Item Two</option>
			        
			        <option value="portfolio.php">Portfolio</option>
			        <option value="portfolio.php">&nbsp;&nbsp;&nbsp;&nbsp;Portfolio List</option>
			        <option value="portfolio_item.php">&nbsp;&nbsp;&nbsp;&nbsp;Portfolio Item</option>
			        <option value="portfolio_item_gallery.php">&nbsp;&nbsp;&nbsp;&nbsp;Portfolio Item Gallery</option>
			        <option value="portfolio_item_video.php">&nbsp;&nbsp;&nbsp;&nbsp;Portfolio Item Video</option>		        
			   
			        <option value="blog.php">Blog</option>
			        <option value="blog.php">&nbsp;&nbsp;&nbsp;&nbsp;Blog List</option>
			        <option value="blog_item.php">&nbsp;&nbsp;&nbsp;&nbsp;Blog Item</option>
			         
			        <option value="contact.php">Contactanos</option>  
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
</body>

<body>

  
</div>            
                
              
              
<div class="clear"></div>
</div>
</html>
</head>    




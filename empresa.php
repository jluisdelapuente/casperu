<?php
include_once './includes/head.php';
?>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/sequence.jquery-min.js"></script>	
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.tipsy.js"></script>

</head>
<body>
  <div id="wrapper">
  
	<div class="container">
		<div class="row">
			<div class="sixteen columns clearfix">
				<div class="breadcrumb">
                                    <a href="index.php" class="first_bc"><span>Inicio</span></a>
                                    <a href="servicios.php" class="last_bc"><span>Servicio</span></a>
			    </div>
			   
				<div class="page_heading"><h1>Corporación Ascad & Semastes S.A.C.</h1></div>
			</div>
		</div>	
		
		<div class="clear"></div>

		<div class="row">
			<div class="sixteen columns clearfix">
				<div class="information closable">La alternativa de solucion <a href="contact.html" id='tooltip1' original-title="Click to Contact us"><b>a tu necesidad</b></a> de una manera innovadora. </div>
                            <p align="justify"> 
                                Asesorías y Capacitaciones para el Desarrollo & Servicio Mantenimiento y Soporte Técnico. 
                                <font color="Blue" size="2" face="Comic Sans MS, Arial, MS Sans Serif">Corporación Ascad &amp; Semastec S.A.C.</font>   
                                Es una organización con personal profesional y técnico de alto nivel, con capacitación constante, dedicada a brindar servicios de 
                                Asesorías y capacitaciones a las empresas, profesionales para el desarrollo integral en sus labores. Contamos con un staff de 
                                profesionales en las áreas de Administración, Contabilidad, jurídico, Ingeniería industrial, Ingeniería de Sistemas, Ingeniería Ambiental, 
                                Gestión Documental.
                            </p> 
                            <p align="justify">
                                Damos soluciones tecnológicas a la medida de sus necesidades, de una manera practica y oportuna, optimizando sus recursos y haciendo 
                                viables sus proyectos para llegar juntos a la meta trazada. Asimismo, realizamos el Servicio Mantenimiento y Soporte Técnico de sus 
                                equipos de oficina.
                            </p> 
			</div>
		</div>
		
		<!-- Tooltip -->
		<script type="text/javascript">
				$(document).ready(function() {
					$('#tooltip1').tipsy({fade: true, gravity: 's'});
				});	
		</script>			
		<!-- Tooltip::END -->
		
		<div class="row team_block">
			<div class="four columns">
				<div class="pic">
					<img src="images/user.png"/>
					<h4>José Luis de la Puente Ríos</h4>
					<p class="team_desc">Gerente General</p>
				</div>		
			</div>
			<div class="four columns">
				<div class="pic">
					<img src="images/user1.png"/>
					<h4>Eduardo Arias Gutierrez</h4>
					<p class="team_desc">Sub Gerente</p>
				</div>		
			</div>
			<div class="four columns">
				<div class="pic">
					<img src="images/user2.png"/>
					<h4>Pilar Chamorro Velasquez</h4>
					<p class="team_desc">Asesoria Legal</p>
				</div>		
			</div>
			<div class="four columns">
				<div class="pic">
					<img src="images/user3.png"/>
					<h4>Robert Zevallos Milla</h4>
					<p class="team_desc">Desarrollo Web</p>
				</div>		
			</div>
		</div>
		
			
		<div class="row">

			<div class="two-thirds column">
				<h2 class="title"><span>Misión</span></h2>
				<p>Brindar soluciones rápidas y oportunas para la toma de decisión de tu empresa, negocio en tu desarrollo personal y empresarial contamos con profesional altamente calificados.</p>
				
			</div>

                    			<div class="two-thirds column">
				<h2 class="title"><span>Visión</span></h2>
				<p>Ser el líder estratégico, dando las soluciones a tu medida, y caminando juntos a nivel nacional e internacional.</p>
			
			</div>
			<div class="one-third column">
				
				<h2 class="title"><span>Testimonio de Clientes</span></h2>
				
				<!-- Testimonials -->
	<div class="testimonials">
				<div class='carousel_arrows_bgr'></div>
				<ul id="testimonials_carousel">
			
                        <li class="one-third column alpha">
                            <div class="testimonial_quote">
	                            
                        <div class="quote_content">
	                        <p>
                                   ¡Guau, solo la plantilla que estábamos buscando! Impresionante diseño limpio,
                                   elemento rico, código limpio, navegador amigable y fácil de administrar. Sigan con el buen trabajo
                                </p>
	                                <span class="quote_arrow"></span>
	                </div>
                                                            
	                            <div class="quote_author">
                                        <div class="icon_testimonial">Eloy Huaranga</div>
                                        <span class="quote_author_description">Supervisor de Instalaciones HFC</span>
	                            </div>
                            </div>	
                        </li>						
			
                        <li class="one-third column alpha">
			<div class="testimonial_quote">
	                            <div class="quote_content">
	                                <p>
                                            Nos dio una solución rapida y con bajo presupuesto, la instucion educativa se encuentra muy agusto con el 
                                            trabajo desempeñado. Gracias.
                                        </p>
	                                <span class="quote_arrow"></span>
	                            </div>
	                            <div class="quote_author"><div class="icon_testimonial">Iris Lopez</div>
                                        <span class="quote_author_description">Directora IEI Divino Niño Jesús</span>
                                    </div>
	                </div>
			</li>
			
                        <li class="one-third column alpha">
                                                    
			<div class="testimonial_quote">
	                            <div class="quote_content">
	                                <p>
                                            Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just 
                                            rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!
                                        </p>
	                                <span class="quote_arrow"></span>
	                            </div>
	                            <div class="quote_author"><div class="icon_testimonial">John Picket</div>
                                        <span class="quote_author_description">Designer, BlueOwlCreative</span>
	                            </div>
	                </div>						
	                </li>								
					</ul>
	</div>	
				<script type="text/javascript">
					jQuery(document).ready(function() {
					    jQuery('#testimonials_carousel').jcarousel({
					    	auto: 4,
					    	scroll: 1,
					        wrap: 'last',
					    	easing: 'easeInOutExpo',
					    	animation: 600
					    });
					});	
				</script>
				<!-- Testimonials::END -->				
	
			</div>
		</div>
		

		
		<div class="row">
                    <!-- Testimonials::END 
			<h2 class="title sixteen columns"><span>Our Portfolio</span></h2>
			<div class="clear"></div>
			<div class="carousel_section">
				<div class='carousel_arrows_bgr'></div>
				<ul id="portfolio_carousel">
					<li class="four columns portfolio_item">
						<a href="portfolio_item_gallery.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_7.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Custom Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_3.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Bespoke Business Solution</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_4.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Custom Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_1.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Custom Plugin Development</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_6.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Website Redesign</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_2.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Online Store Design</h5>
					  	</a>
					</li>
					<li class="four columns portfolio_item">
						<a href="portfolio_item.html" rel="prettyPhoto" title="Custom Design">
					  		<span class="pic"><img src="images/th3_8.jpg"/><div class="img_overlay"></div></span>
					  		<h5>Template Design</h5>
					  	</a>
					</li>				
				</ul>
                     --> 
			</div>
                      
                        
		</div>
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
			    jQuery('#portfolio_carousel').jcarousel({
			    	scroll: ($(window).width() > 767 ? 4 : 1),
			    	easing: 'easeInOutExpo',
			    	animation: 600
			    });
			});	
			
			
			// Reload carousels on window resize to scroll only 1 item if viewport is small
		    $(window).resize(function() {
		    	 var el = $("#portfolio_carousel"), carousel = el.data('jcarousel'), win_width = $(window).width();
		    	   var visibleItems = (win_width > 767 ? 4 : 1);
		    	   carousel.options.visible = visibleItems;
		    	   carousel.options.scroll = visibleItems;
		    	   carousel.reload();
		    });
		</script>
	
	
	
	
<?php
include_once './includes/footer.php';
?>
	
  </div>

</body>
</html>
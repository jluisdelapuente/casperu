<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<?php
include_once './includes/head.php';
?>
    
<head>

</head>
<body>
  <div id="wrapper">
  
	<div class="container">
	
		<div class="header clearfix row">

		</div>
		
		
		<!-- Main Navigation -->
		<div class="row no_bm">
			<div class="dark_menu sixteen columns">
				
				
				
				
						
			</div>
		</div>
		<!-- Main Navigation::END -->

		<div class="row">
			<div class="sixteen columns clearfix">
				<div class="breadcrumb">
			        <a href="./index.php" class="first_bc"><span>Inicio</span></a>
			        <a href="./virtual.php"><span>Virtual</span></a>
			        <a href="presencial.php" class="last_bc"><span>Presencial</span></a>
			        <a href="presencial.php" class="last_bc"><span>Seminario</span></a>                                
			    </div>
			   
				<div class="page_heading"><h1>Capacitaciones</h1></div>
			</div>
		</div>		

		
		<div class="row">
			<div class="sixteen columns media_item">
	
				<div class="pic ten columns alpha">	
					<iframe class="frame-scale-with-grid" src="http://player.vimeo.com/video/33088986?badge=0" width="580" height="326" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>			
				</div>
						
				<div class="five columns portfolio_description omega">
					<h5>Office Básico</h5>
					<p align="justify">
                                         En este curso de Office Básico aprenderás a utilizar las herramientas de Microsoft Word, Excel 
                                         y Power Point.
                                        
                                        </p>
					
					<h5>Descripción</h5>
					
					<ul class="checked">
						<li>Microsoft Word</li>
						<li>Microsoft Excel</li>
						<li>Microsoft Power</li>
					</ul>

					<p><a href="http://vimeo.com/33088986" target="_blank" class="button sm_button button_hilite">Visit Project</a></p>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="sixteen columns media_item">
	
				<div class="pic ten columns alpha scale-with-grid">	
					<iframe class="frame-scale-with-grid" width="580" height="340" src="http://www.youtube.com/embed/g1iPYHxCRIk?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
						
				<div class="five columns portfolio_description omega">
					<h5>Técnico en Ofimática</h5>
					<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed metus gravida est viverra molestie non vitae nisi. Ut porta lacinia lacus at faucibus.</p>
					
					<h5>Description</h5>
					
					<ul class="checked">
						<li>Custom Design</li>
						<li>HTML/CSS</li>
						<li>Web Development</li>
					</ul>

					<p><a href="http://www.youtube.com/watch?v=g1iPYHxCRIk" target="_blank" class="button sm_button button_hilite">Visit Project</a></p>
				</div>

			</div>
		</div>


		<div class="row">
			<div class="sixteen columns clearfix media_item">
			
				<!-- FlexSlider -->
				<div class="flexslider ten columns alpha">
			        <ul class="slides">
			          <li class="pic">
			          	<a href="images/9_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
			          		<img src="images/portfolio_img3.jpg" /><span class="img_overlay_zoom"></span>
			          	</a>
			          </li>
			          <li class="pic">
			          	<a href="images/4_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
			          		<img src="images/portfolio_img2.jpg" /><span class="img_overlay_zoom"></span>
			          	</a>
			          </li>
			          <li class="pic">
			          	<a href="images/5_big.jpg" rel="prettyPhoto[portfolio]" title="Custom Web Development">
			          		<img src="images/portfolio_img1.jpg" /><span class="img_overlay_zoom"></span>
			          	</a>
			          </li>
			        </ul>
			      </div>
	
					<script type="text/javascript" charset="utf-8">
						$(document).ready(function(){
							$(".pic a[rel^='prettyPhoto']").prettyPhoto({
								animation_speed:'normal',
								overlay_gallery: false,
								social_tools: false
							});
						});
					</script>
					  				  
					<script type="text/javascript">
					  $(window).load(function(){
					    $('.flexslider').flexslider({
					      animation: "slide",
					      controlNav: false,
					      start: function(slider){
					        $('body').removeClass('loading');
					      }
					    });
					  });
					</script>
					<!-- FlexSlider -->
					
					
					
					
					<div class="five columns portfolio_description omega">
						<h5>Gallery</h5>
						<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed metus gravida est viverra molestie non vitae nisi. Ut porta lacinia lacus at faucibus.</p>
						<p align="justify">Fusce justo lectus, lacinia tristique luctus ut, tempor a eros. Aliquam in turpis tortor, in sagittis augue.</p>
						
						<h5>Featured List</h5>
						
						<ul class="checked">
							<li>Custom Web Design</li>
							<li>HTML/CSS</li>
							<li>Web Development</li>
							<li>Bespoke Programming</li>
						</ul>
	
						<p><a href="http://www.blueowlcreative.com/" target="_blank" class="button sm_button button_hilite">Visit Website</a></p>
					</div>
	
			</div>
		</div>
		
	
	</div>

<?php
include_once './includes/footer.php';
?>
	
  </div>

</body>
</html>
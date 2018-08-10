  
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
				
<div class="page_heading"><h1>Ingresos</h1></div>
			</div>		

            
            </div>

		<div class="row">
<div class="eight columns flexslider">	
       	 <h2 class="title">Gerencia </h2>
                <div class="content">
                    <form id="solitaringreso" name="accesopermitido" method="post" action="gerencia/login.php">
                        <fieldset>
                                    
                                    <label>Usuario: </label>
                                    <input type="text"  name="username"/>
                                    <label>Clave</label>
                                    <input type="password"  name="userpass"/>
                                    <input type="submit" name="Submit" value="Ingresar" />
                                    <input type="reset" value="Limpiar"></input>
                                    <p><a href="#">¿Olvidaste tu contraseña??</a></p>
                        </fieldset>
                     </form>
                </div>
					<!-- FlexSlider -->		
</div>

<div class="seven columns services_description">	

    
<div class="eight columns flexslider">	
       	 <h2 class="title">Participantes </h2>
                <div class="content">
                    <form id="solitaringreso" name="accesopermitido" method="post" action="acceso/login.php">
                        <fieldset>
                                    
                                    <label>Usuario: </label>
                                    <input type="text"  name="username"/>
                                    <label>Clave</label>
                                    <input type="password"  name="userpass"/>
                                    <input type="submit" name="Submit" value="Ingresar" />
                                    <input type="reset" value="Limpiar"></input>
                                    <p><a href="#">¿Olvidaste tu contraseña??</a></p>
                        </fieldset>
                     </form>
                </div>
					<!-- FlexSlider -->		
</div>    
    
					
</div>	
		

	</div>

<?php
include_once './includes/footer.php';
?>

  </div>

</body>
</html>
<!DOCTYPE html><!-- indicamos que la pagina contiene elemetos de html5 -->
<html lang="es"> <!-- es una página en español -->

<head>

	<!--=================================================
		METAINFORMACION PARA TODOS LOS NAVEGADORES
       ================================================== -->	
	<meta charset="utf-8"><!-- soprota la codificacion utf-8 -->
	<title>Next Level</title>
	
	<!-- Metainformacion para los buscadores -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="author" content="Next Level">
	<meta name="Robots" content="index, follow, all"> <!-- autoriza la indexacion -->
	<meta name="copyright" content="2013 @ Next Level">
	
	<meta name="keywords" content="videojuegos, comprar videojuegos, consolas, tienda videojuegos, 
									tienda videojuegos online, playstation 3, ps3, xbox 360, ps vita, 
									wii u, wii, ds, 3ds, nintendo, PSP">
	
	
	<meta name="description" content="Next Level | tienda de videojuegos online| 
										comprar videojuegos de PS3, Xbox 360, PS Vita,
										 Wii U, Wii, PC, PSP, PS2, DS, 3DS">
										 								
	<!--==========================================================
		METAINFORMACION PARA LOS DISPOSITIVOS MOVILES
      ============================================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- evita el reeescalado automatico de los moviles-->

	

	<!-- ================================================
		FAVICONS, para todos los dispositivos
	================================================== -->
	<link rel="shortcut icon" href="imagenes/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="imagenes/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="imagenes/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="imagenes/favicon/apple-touch-icon-114x114.png">
	
	<!-- ==================================================
				JAVASCRIPT
  	  ===================================================== -->
	<!-- activa la compatibilidad de Html5 en todos los navegadores -->
	<!--[if lt IE 9]>
		<script src="js/librerias/html5/html5.js"></script>
	<![endif]-->
	
	
	
	<!-- jquery-->
	<script src="js/librerias/jquery/jquery.js"></script>
	<script src="js/librerias/jquery/jquery.easing.js"></script>
	<script src="js/librerias/jquery/jquery.timer.js"></script>
	<!-- habilita los medias queryes para los navegadores que no lo soportan -->
	<script type="text/javascript" src="js/librerias/css3-mediaqueries/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/librerias/slider.js"></script>
	
	<!-- ==================================================
				CSS
  	 ===================================================== -->
	<!-- css para la maquetacion por celdas -->
	<link rel="stylesheet" href="css/sistemaCeldas/celdas.css" >
	<link rel="stylesheet" href="css/estructura.css">
	
	
		
</head>

<body>
	<!-- cabecera de la pagina -->
   <header class="full" id="bg">
	 <div class="contenedor">	
		<div class=" columnas dieciseis alpha" > 
			
			<div class="columnas seis logo alpha omega">
				
			</div>
			
			<div class="columnas diez  contenedorMenuCab omega">				
				<div class="columnas cinco alpha omega registro">
					<a href="#">Registrarse</a>
					&nbsp;&nbsp;&nbsp;o&nbsp;&nbsp;&nbsp;
					<a href="#" >Ingresar</a>
					
				</div>				
			</div>
			
			<div class="columnas diez  contenedorBuscador omega">
				<div class="columnas cinco alpha omega buscar">
					<input type="text" placeholder="buscar.."  />
				</div>
			</div>	
		</div>
		<div class="clear"></div>
		<nav id="navCabecera" class=" columnas dieciseis alpha">
			<ul>
				<li>
					<a href="#" class="seleccionado">Xbox 360</a>
				</li>
				<li>
					<a href="#">PS3</a>
				</li>
				<li>
					<a href="#">WII</a>
					
				</li>
				<li>
					<a href="#">PSP Vita</a>
				</li>
				<li>
					<a href="#">PC</a>
				</li>
			</ul>
		</nav>
		<!-- siempre debe de ir despues de comletar las 16 columnas -->
		<div class="clear"></div>
	</div>	
	</header>
	<!-- fin cabecera d ela pagina -->
	

	<!-- espacio para el menu de los generos y el slider de imagenes-->
	<div id="ContenedorSlide" class="contenedor" >
		<div class="columnas dieciseis alpha slide">
			
			<ul id="slideshow">  
            <li class="box1"><img src="img/tiger.jpg" alt="Tiger"/></li>  
            <li class="box2"><img  src="img/tiger.jpg" alt="Macaw"/></li>  
            <li class="box3"><img  src="img/tiger.jpg" alt="Bald Eagle"/></li>  
            <li class="box4"><img  src="img/tiger.jpg" alt="Panda"/></li>  
        </ul>  
		</div>
			<div class="clear"></div>	
	</div>
	<!-- fin  slider y menu generos--->
	
	<!-- espacio para los articulos mas vendidos -->
	<div id="top" class="contenedor">
			<div id="topVentas" class=" alpha columnas seis">
				<h3> Top 10 <span>más vendidos</span></h3>
				<div class="contenedorTop10"> 
					<figure class="columnas dos alpha omega imgTop">
						<img src="img/tiger.jpg" alt="">
					</figure>
					<div class="columnas cuatro omega textoTop">
						<h6> titulo del videojuego </h6>
						<!--<p>
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusm od tempor incididunt. Fusce euis mod consequat ante. Lorem ipsum dolor sit amet, 
						</p>-->
						<a href="#">ver detalles </a>
					</div>
				</div>
				
				
				<div class="contenedorTop10"> 
					<figure class="columnas dos alpha omega imgTop">
						<img src="img/tiger.jpg" alt="">
					</figure>
					<div class="columnas cuatro omega textoTop">
						<h6> titulo del videojuego </h6>
						<!--<p>
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusm od tempor incididunt. Fusce euis mod consequat ante. Lorem ipsum dolor sit amet, 
						</p>-->
						<a href="#">ver detalles </a>
					</div>
				</div>
				
				
				<div class="contenedorTop10"> 
					<figure class="columnas dos alpha omega imgTop">
						<img src="img/tiger.jpg" alt="">
					</figure>
					<div class="columnas cuatro omega textoTop">
						<h6> titulo del videojuego </h6>
						<!--<p>
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusm od tempor incididunt. Fusce euis mod consequat ante. Lorem ipsum dolor sit amet, 
						</p>-->
						<a href="#">ver detalles </a>
					</div>
				</div>
				
				
				<div class="contenedorTop10"> 
					<figure class="columnas dos alpha omega imgTop">
						<img src="img/tiger.jpg" alt="">
					</figure>
					<div class="columnas cuatro omega textoTop">
						<h6> titulo del videojuego </h6>
						<!--<p>
							Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusm od tempor incididunt. Fusce euis mod consequat ante. Lorem ipsum dolor sit amet, 
						</p>-->
						<a href="#">ver detalles </a>
					</div>
				</div>
				
			</div>	
			<div class="clear"></div>
	</div>
	<!-- Fin articulos mas vendidos-->
	
	
	<!-- Pie de pagina -->
	<footer class="contenedor">
		<div class="columnas dieciseis footer alpha">
			pie de pagina ..
		</div>
		<div class="clear"></div>
	</footer>
	<!-- fin del pie de la pagina -->
	
</body>
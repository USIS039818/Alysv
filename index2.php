<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->
<br>
<br> 
<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/aguila.jpg" alt="#" style="min-height:350px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Aves</h4>
				  <p>
				  Son animales vertebrados, que tienen como característica principal tener las extremidades anteriores modificadas en forma de alas, lo que en la mayoría de los casos le permite volar. ... Algunas de las características comunes a todas las aves son el cuerpo aerodinámico o los músculos finos y potentes.				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/jaguar.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Mamiferos</h4>
				  <p>
				  Son animales que se caracterizan porque las hembras alimentan a las crías a través de glándulas mamarias productoras de leche. Se caracterizan por: ... La otra excepción son los monotremas, que son los únicos mamíferos que ponen huevos, es decir que tienen reproducción ovípara.				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/iguana.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Reptiles</h4>
				  <p>
				  Es un animal vertebrado que carece de patas o que las tiene muy cortas, por lo que, al caminar, roza el suelo con su vientre. Se trata de animales que pueden ser ovíparos u ovovivíparos y que presentan una temperatura variable.</p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/rana.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Anfibios</h4>
				  <p>
				  El término anfibio permite nombrar al animal que puede vivir tanto en tierra como sumergido en el agua. Los sapos y las ranas, por ejemplo, son animales anfibios ya que, de jóvenes, tienen branquias y viven en el agua; sin embargo, de adultos, desarrollan pulmones y pasan a vivir en la tierra.				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pez.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Peces</h4>
				  <p>
				  Son animales vertebrados primariamente acuáticos, generalmente ectotérmicos (regulan su temperatura a partir del medio ambiente) y con respiración por branquias.				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
			
		
			
			
</div>
<center><h3>Mas sobre la vida silvestre</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Animales en preligro</h3>	
	<img src="images/tortuga.jpg" alt="#"/>
	<div class="caption">
	<h5>Descripción</h5>	
	<p align="justify">
	
	La Especie En Peligro de Extinción, la misma Convención la determina como “toda aquella cuyas poblaciones han sido reducidas a un nivel crítico o cuyo hábitat ha sido reducido tan drásticamente que se considera que está en inmediato peligro de desaparecer o ser exterminada en el territorio nacional y por lo tanto, requiere de medidas estrictas de protección o restauración”.
	</p>
	<a class="pull-right" href="https://www.contrapunto.com.sv/sociedad/ambiente/estos-son-los-animales-en-peligro-de-extincion-en-el-salvador/3076">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>
	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Animales amenazados</h3>	
	<img src="images/perico.jpg" />
	<div class="caption">
	<h5> Descripción</h5>	
	<p align="justify">
	
	La categoría de Especie Amenazada de Extinción la establece la Convención sobre el Comercio Internacional de Especies Amenazadas de Fauna y Flora Silvestre (CITES) como “toda aquella que si bien no está en peligro de extinción a corto plazo, observa una notable continua baja en el tamaño y rango de distribución de sus poblaciones debido a sobre explotación, destrucción amplia del hábitat u otras modificaciones ambientales drásticas”.
	</p>
	<a class="pull-right" href="https://www.marn.gob.sv/especies-amenazadas-o-en-peligro-de-extincion/">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>
	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">bosques protegidos</h3>	
	<img src="images/montecristo Arbol.jpg"/>
	<div class="caption">
	<h5>Descripción</h5>	
	<p align="justify">
	
Los bosques protegidos son lugares que reciben protección por sus valores naturales reconocidos, ecológicos y/o culturales. Hay varios tipos de bosques protegidos, que varían según el nivel de protección en función de las leyes vigentes de cada país o de los reglamentos de las organizaciones 
internacionales interesadas. Hay más de 50.000 bosques protegidos en el mundo; y representan más del 5% de la superficie terrestre.
	<a class="pull-right" href="https://www.marn.gob.sv/listado-de-areas-naturales-protegidas/">Ver detalles</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>Protejamoslos</h3>	
		<iframe width="400" height="315" src="video/Fauna silvestre en El Salvador.mp4"  frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3>Hagamos conciencia</h3>	
		<iframe width="400" height="315" src="video/Extinción   Documental, El Salvador.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	</div>

	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<center>&copy; Gerson Melendez. Hector Hernan. Alexia Cortez. Roberto Aly <br/><br/></center>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>
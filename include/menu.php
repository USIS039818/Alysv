<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">Principal</a></li>
			<li class=""><a href="index.html">formularios</a></li>
			<li class=""><a href="mapa.php">mapa</a></li>
			<li><a href="">contactanos</a>
					<ul>
						<li><a href="https://api.whatsapp.com/send?phone=79745214">whatssap</a></li>
						<li><a href="https://m.me/gerson.melendeznunez">facebook</a></li>
						</ul>

						<style type="text/css">
						.nav li a {
				background-color:#A3C1BA;
				color:;
				text-decoration:none;
				padding:5px 12px;
				display:block;
			}
			
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:80px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			
			
		
			</style>

	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>
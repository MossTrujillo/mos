<!DOCTYPE HTML>

<html>
	<head>
		<title>Laboratorio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Laboratorio</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index..php">Inicio</a></li>
											<li><a href="nuevo.php">Nuevo</a></li>
											<li><a href="consulta.php">Consulta</a></li>
											<li><a href="modificar.php">Modificar</a></li>
											<li><a href="eliminar.php">Eliminar</a></li>
											<li><a href="#">Salir</a></li>
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Laboratorio</h2>
							<p>Iniciar<br />
							Sesión<br />
						
							<ul class="actions">
								 <form   method="post" action="validar.php" enctype="multipart/form-data">
						<div class="container 75%">
							<div class="row uniform 80%">							
							<div class="3u 12u$(xsmall)">								
	                     	</div>						
							<div class="6u$ 12u$(xsmall)">
									<input name="usuario" placeholder="Usuario" type="text" required/>
								</div>

                            <div class="3u 12u$(xsmall)">
                            </div>																								
                            <div class="6u$ 12u$(xsmall)">
									<input name="password" placeholder="Contraseña" type="text"required//>
								</div>	
                            <div class="5u 10u$(xsmall)">
                            </div>	

								<div>
							            <ul class="actions">
							            <li><input type="submit" class="special" name="Ingresar" id="Ingresar" value="Ingresar" /></li>
						                </ul>      
							           </div>
						        </div>
							</div>
						</div>
                      </form>
					  <?php
if(isset($_GET['errorUsuario'])){
echo "<div align=\"center\">El nombre de usuario y/o contraseña es incorrecto.</div>"; 
}
?>
					</ul>
				</div>

						
					</section>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Consulta</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
	<body>

		<div id="page-wrapper">

				<header id="header">
						<h1><a href="index.php">Laboratorio</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Inicio</a></li>
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

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Actualizar</h2>
							<p>Busca el registro que deseas modificar</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

							
<form name="consulta1" method="post" action="ejecuta2.php">

<div class="container 75%">
							<div class="row uniform 50%">
							


			<div class="6u 12u$(xsmall)">
											<select name="t_dato" id="t_dato">
												<option value="">- Selecciona criterio de busqueda -</option>

												<option value="idPaciente">Expediente</option>
												</select>
								
								  </div> 
		
		
		  <div class="6u$ 12u$(xsmall)">
									<input name="mostrar" id="mostrar"  placeholder="Palabra a buscar" type="text" required/>
								</div>	



 <div>
							            <ul class="actions">
     
     <input type="submit" value="Aceptar"  class="special">
      

      <input type="hidden" name="MM_insert" value="form1" />
	  						                </ul>      
							           </div>
</div></div>					

 </form>
							
		
							
							
							
							
							
							
							
							
		
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
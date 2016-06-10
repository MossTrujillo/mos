


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nuevo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Laboratorio</a></h1>
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
							<h2>Nuevo Registro</h2>
							<p>Llena los campos correctamente, algunos campos son obligatorios</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
<form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data">
						<div class="container 75%">
							<div class="row uniform 50%">
							
							
								   <div class="12u 12u$(xsmall)">
							 Responsable							
							  </div> 
			                    <div class="6u 12u$(xsmall)">
									<input name="resu" id="resu"  placeholder="Nombre del Responsable" type="text" required/>
								</div>											

							      <div class="6u$ 12u$(xsmall)">
									<input name="ced" id="ced"  placeholder="Cédula" type="text" required/>
								</div>	
								
								
							  <div class="12u 12u$(xsmall)">
							   Paciente
							  </div> 
							
                              <div class="4u 12u$(xsmall)">
									<input name="nombre" id="nombre"  placeholder="Nombre" type="text" required/>
								</div>											
							       <div class="4u 12u$(xsmall)">
									<input name="apepat" id="apepat" placeholder="Apellido Paterno" type="text" />
								</div>								
							      <div class="4u$ 12u$(xsmall)">
									<input name="apemat" id="apemat" placeholder="Apellido Materno" type="text" />
								</div>
								
								
								
								  <div class="4u 12u$(xsmall)">
									<input name="direccion" id="direccion"  placeholder="Dirección" type="text" required/>
								</div>											
							       <div class="4u 12u$(xsmall)">
									<input name="correo" id="correo" placeholder="Correo" type="text" />
								</div>								
							      <div class="4u$ 12u$(xsmall)">
									<input name="tel" id="tel" placeholder="Teléfono" type="text" />
								</div>
								
								
								  <div class="12u 12u$(xsmall)">
								 Resultados
							
							  </div> 
			                    
								  <div class="12u$">
									<textarea name="cara" id="cara" placeholder="Características" rows="2" required/></textarea>
								</div>
								  <div class="12u$">
									<textarea name="obser" id="obser" placeholder="Observaciones" rows="2" required/></textarea>
								</div>
								
						
								
							   <div class="12u 12u$(xsmall)">
								Tipo de prueba
							
							  </div> 
			               
								<div class="12u 12u$(xsmall)">
											<select name="categoria" id="categoria">
												<option value="">- Selecciona el tipo de prueba -</option>
												<option value="Embarazo">Embarazo</option>
												<option value="Muestra de sangre">Muestra de sangre</option>
												<option value="Orina">Orina</option>
												<option value="Serológica">Serológica</option>
													<option value="Coagulación">Coagulación</option>
												<option value="Mamográfia">Mamográfia</option>
													<option value="Glucosa">Glucosa</option>
												<option value="Cancer">Cancer</option>
											</select>
								
								  </div> 
								
								     <div class="12u$">
									<textarea name="descripcion" id="descripcion" placeholder="Detalles" rows="4" required/></textarea>
								</div>
							
								
							   
                                       <div>
							            <ul class="actions">
							            <li><input type="submit" class="special" name="Aceptar" id="Aceptar" value="Guardar" /></li>
							            <li><input type="reset" class="alt" value="Reiniciar" /></li>
						                </ul>      
							           </div>
						        </div>								
							</div>
						</div>						
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
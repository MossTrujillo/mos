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
							<h2>Eliminar</h2>
							<p></p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

							
							
<?php 
$conexion = mysqli_connect("localhost","root","","laboratorio") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");


$query = "select * from paciente inner join responsable On paciente.idPaciente = responsable.idResponsable inner join resultados On paciente.idPaciente = resultados.idResultados inner join tipo_prueba On paciente.idPaciente = tipo_prueba.idTipo_prueba
where     idPaciente='"
      .$_POST['mostrar']."'" or die("Error in the consult.." . mysqli_error($conexion)); 
$resultado = $conexion->query($query);
while($filas=mysqli_fetch_array($resultado)){
//****************IDES**********************
    $ida=$filas['idPaciente'];
	$idb=$filas['idResponsable'];
	$idc=$filas['idResultados'];
	$idd=$filas['idTipo_prueba'];
//******************************************	
	$nom=$filas['Nombre'];
	$apa=$filas['Apaterno'];
	$ama=$filas['Amaterno'];
    $dir=$filas['Direccion'];
    $cor=$filas['Correo1'];
    $tel=$filas['Telefono'];
	$nombrer=$filas['Nombrer'];
    $ced=$filas['Cedula'];
	$car=$filas['Caracteristicas'];
    $ob=$filas['Observaciones'];
		$nomp=$filas['Nombre_prueba'];
    $deta=$filas['Detalles'];	
?>


<?php
echo "<form id='form1' name='form1' method='post' action='delete.php' enctype='multipart/form-data'>";
						echo "<div class='container 75%'>";
							echo "<div class='row uniform 50%'>";							
echo "<div class='12u 12u$(xsmall)'>";
 echo "Responsable";
echo "</div>";
			                   echo " <div class='6u 12u$(xsmall)'>";
									echo "<input name='resu' id='resu'  placeholder='Nombre del Responsable' type='text' value='".$nombrer."'/>";
								echo "</div>	";										

echo "<div class='6u$ 12u$(xsmall)'>";
								echo "	<input name='ced' id='ced'  placeholder='Cédula' type='text' value='".$ced."'/>";
								echo "</div>";
								
								
							  echo "<div class='12u 12u$(xsmall)'>";
                             echo "Paciente";
							 echo " </div> ";
							
                             echo " <div class='4u 12u$(xsmall)'>";
								echo "<input name='nombre' id='nombre'  placeholder='Nombre' type='text' value='".$nom."'/>";
echo "</div>		";									
echo "<div class='4u 12u$(xsmall)'>";
echo "<input name='apepat' id='apepat' placeholder='Apellido Paterno' type='text'value='".$apa."' />";
echo "</div>	";							
							     echo " <div class='4u$ 12u$(xsmall)'>";
echo "<input name='apemat' id='apemat' placeholder='Apellido Materno' type='text'value='".$ama."'/>";
								echo "</div>";
								
								
								 echo " <div class='4u 12u$(xsmall)'>";
echo "<input name='direccion' id='direccion'  placeholder='Dirección' type='text'value='".$dir."'/>";
								echo "</div>				";							
							      echo " <div class='4u 12u$(xsmall)'>";
echo "<input name='correo' id='correo' placeholder='Correo' type='text' value='".$cor."'/>";
								echo "</div>			";					
							     echo " <div class='4u$ 12u$(xsmall)'>";
									echo " <input name='tel' id='tel' placeholder='Teléfono' type='text' value='".$tel."'/>";
								echo "</div>";
								
								
								echo "  <div class='12u 12u$(xsmall)'>";
								 echo "Resultado";
							
							 echo " </div>";
			                    
echo "<div class='12u$'>";
echo "<textarea name='cara' id='cara' placeholder='Características' rows='2' />".$car."</textarea>";
								echo "</div>";
echo "<div class='12u$'>";
								echo "	<textarea name='obser' id='obser' placeholder='Observaciones' rows='2' />".$ob."</textarea>";
echo "</div>";
								
						
								
							   echo "<div class='12u 12u$(xsmall)'>";

							
echo "</div>";
			               
                                 echo "<div class='12u 12u$(xsmall)'>";
 echo "Tipo de prueba";
								 echo "  </div>";

													     echo " <div class='12u$(xsmall)'>";
									echo " <input name='categoria' id='categoria' placeholder='Tipo' type='text' value='".$nomp."'/>";
								echo "</div>";		 
								 
								 
								  echo "   <div class='12u$'>";
									echo "<textarea name='descripcion' id='descripcion' placeholder='Detalles' rows='4' />".$deta."</textarea>";
								echo "</div>";
							
							
					            echo " <div class='12u$(xsmall)'>";
                                echo " <input name='ida1' id='ida1' type='hidden' value='".$ida."'/>";
								echo "</div>";	
								
								echo " <div class='12u$(xsmall)'>";
                                echo " <input name='idb1' id='idb1' type='hidden' value='".$idb."'/>";
								echo "</div>";
								
								echo " <div class='12u$(xsmall)'>";
                                echo " <input name='idc1' id='idc1' type='hidden' value='".$idc."'/>";
								echo "</div>";
								
								echo " <div class='12u$(xsmall)'>";
                                echo " <input name='idd1' id='idd1' type='hidden' value='".$idd."'/>";
								echo "</div>";
						
                                     echo "  <div>";
							           echo " <ul class='actions'>";
							          echo "  <li><input type='submit' class='special' name='Aceptar' id='Aceptar' value='Eliminar' /></li>";
							       
echo "</ul>";      
echo "</div>";
echo "</div>	";							
							echo "</div>";
echo "</div>	";					
  
		  echo "</form>";
		  
		  
		  ?>
				</div>
			

<?php }?>

			

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
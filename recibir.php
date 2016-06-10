
<?php 

// $conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
// $db=mysql_select_db('s.s.de_accidentes',$conexion)or die('No existe la base de datos.');
// @mysql_query("SET NAMES 'utf8'"); 

$conexion = mysqli_connect("localhost","root","","laboratorio") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");



$a=$_POST['resu'];
$b=$_POST['ced'];
$res=mysqli_query($conexion,"INSERT INTO responsable (Nombrer, Cedula) 
VALUES ('".$a."','".$b."')");
$id1=mysqli_insert_id($conexion);


$c=$_POST['nombre'];
$d=$_POST['apepat'];
$e=$_POST['apemat'];
$f=$_POST['direccion'];
$g=$_POST['correo'];
$h=$_POST['tel'];
$res1=mysqli_query($conexion,"INSERT INTO paciente(Nombre, Apaterno, Amaterno, Direccion, Correo1, Telefono) 
VALUES ('".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')");
$id2=mysqli_insert_id($conexion);

$i=$_POST['cara'];
$j=$_POST['obser'];
$res2=mysqli_query($conexion,"INSERT INTO resultados(Caracteristicas, Observaciones) 
VALUES ('".$i."','".$j."')");
$ide=mysqli_insert_id($conexion);


$k=$_POST['categoria'];
$l=$_POST['descripcion'];
$res3=mysqli_query($conexion,"INSERT INTO tipo_prueba(id_Resultados, Nombre_prueba, Detalles) 
VALUES ('".$ide."','".$k."','".$l."')");
$id3=mysqli_insert_id($conexion);





$fecha = date("d-m-y");
$res4=mysqli_query($conexion,"INSERT INTO informe(Paciente_idPaciente,Responsable_idResponsable, Tipo_prueba_idTipo_prueba,Fecha) 
VALUES ('".$id1."','".$id2."','".$id3."','".$fecha."')");

// $fecha_actual = date("d-m-y");


if ($res){
	// echo '<script>alert("El envío del formulario ha concluído exitosamente")</script>';
echo "
<script language='JavaScript'>
var prueba = 'Sus datos fueron guardados correctamente';
alert(prueba);
location.href = \"http:////localhost/laboratorio/nuevo.php\"   
</script>";
}else{
    echo 'no se puedo insertar';

} 


?>
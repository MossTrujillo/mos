
<?php 

// $conexion=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
// $db=mysql_select_db('s.s.de_accidentes',$conexion)or die('No existe la base de datos.');
// @mysql_query("SET NAMES 'utf8'"); 

$conexion = mysqli_connect("localhost","root","","laboratorio") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");

$id1=$_POST['ida1'];
$id2=$_POST['idb1'];
$id3=$_POST['idc1'];
$id4=$_POST['idd1'];


	
	
	


$a=$_POST['resu'];
$b=$_POST['ced'];
$res=mysqli_query($conexion,"UPDATE responsable set Nombrer='$a', Cedula='$b' where idResponsable='$id2'");

$c=$_POST['nombre'];
$d=$_POST['apepat'];
$e=$_POST['apemat'];
$f=$_POST['direccion'];
$g=$_POST['correo'];
$h=$_POST['tel'];
$res1=mysqli_query($conexion,"UPDATE  paciente set Nombre='$c', Apaterno='$d', Amaterno='$e', Direccion='$f', Correo1='$g', Telefono='$h'where idPaciente='$id1'");


$i=$_POST['cara'];
$j=$_POST['obser'];
$res2=mysqli_query($conexion,"UPDATE resultados set  Caracteristicas='$i', Observaciones='$j' where idResultados='$id3'"); 



$k=$_POST['categoria'];
$l=$_POST['descripcion'];
$res3=mysqli_query($conexion,"UPDATE tipo_prueba set Nombre_prueba='$k', Detalles='$l' where idTipo_prueba='$id4'");






// $fecha = date("d-m-y");
// $res4=mysqli_query($conexion,"INSERT INTO informe(Paciente_idPaciente,Responsable_idResponsable, Tipo_prueba_idTipo_prueba,Fecha) 
// VALUES ('".$id1."','".$id2."','".$id3."','".$fecha."')");

// $fecha_actual = date("d-m-y");


if ($res){
	// echo '<script>alert("Sus datos han sido actualizados correctamente")</script>';
echo "
<script language='JavaScript'>
var prueba = 'Sus datos fueron guardados correctamente';
alert(prueba);
location.href = \"http:////localhost/laboratorio/modificar.php\"   
</script>";
}else{
    echo 'no se puedo insertar';

} 


?>
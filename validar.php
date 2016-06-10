<?php
$conexion = mysqli_connect("localhost","root","","laboratorio") or die("Error " . mysqli_error($conexion));
$conexion ->query("SET NAMES 'utf8'");


$usuario=$_POST['usuario'];
$password=$_POST['password'];
$consulta = "select * from usuarios  where usuario='$usuario' && password='$password'"
     or die("Error in the consult.." . mysqli_error($conexion)); 
$resultado = $conexion->query($consulta);

$numeroRegistro=mysqli_num_rows($consulta);

if($numeroRegistro==1){
               
          if($usuario=='Administrador')
                {
                session_start();
	        $_SESSION['usuario']=$usuario;
                header("location:nuevo.php");
                }}
               else {
	        header("location:index.php?errorUsuario");
                    }  
  
if($numeroRegistro==1){
               
          if($usuario=='Usuario')
                {
                session_start();
	        $_SESSION['usuario']=$usuario;
                header("location:nuevo.php");
                }}
               else {
	        header("location:index.php?errorUsuario");
                    } 


if($numeroRegistro==1){
               
          if($usuario=='Admin')
                {
                session_start();
	        $_SESSION['usuario']=$usuario;
                header("location:bienvenidos.php");
                }}
               else {
	        header("location:index.php?errorUsuario");
                    }   
?>

<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$FechaRegistro['FechaRegistro'];
$NoTelefono['NoTelefono'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$email','$FechaRegistro','$NoTelefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>
<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$Email=$_POST['Email'];
$FechaRegistro=$_POST['FechaRegistro'];
$NoTelefono=$_POST['NoTelefono'];
$sql="UPDATE alumno SET  id='$id',nombres='$nombres',Email='$Email',FechaRegistro='$FechaRegistro,NoTelefono='$NoTelefono WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
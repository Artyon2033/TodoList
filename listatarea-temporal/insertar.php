<?php

// INSERTAR DATOS A TRAVES DEL FORM DE INGRESE DATOS

include("conexion.php");
$con=conectar();

//CAPTURAMOS LOS DATOS
$cod_tarea=$_POST['cod_tarea'];
$tarea=$_POST['tarea'];


//LOS INSERTAMOS
$sql="INSERT INTO tarea VALUES('$cod_tarea','$tarea')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>
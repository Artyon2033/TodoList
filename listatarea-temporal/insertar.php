<?php
include("conexion.php");
$con=conectar();

$id_tarea=$_POST['id_tarea'];
$tarea=$_POST['tarea'];


$sql="INSERT INTO tarea VALUES('$id_tarea','$tarea')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>
<?php

include("conexion.php");
$con=conectar();

$id_tarea=$_GET['id_tarea'];

$sql="DELETE FROM tarea  WHERE id_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
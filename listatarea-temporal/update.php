<?php

include("conexion.php");
$con=conectar();

$cod_tarea=$_POST['cod_tarea'];
$tarea=$_POST['tarea'];

$sql="UPDATE tarea SET tarea='$tarea' WHERE cod_tarea='$cod_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
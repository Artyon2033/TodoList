<?php

include("conexion.php");
$con=conectar();

//ELIMINAR UNA TAREA POR EL ID

$cod_tarea=$_GET['id'];

$sql="DELETE FROM tarea  WHERE cod_tarea='$cod_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
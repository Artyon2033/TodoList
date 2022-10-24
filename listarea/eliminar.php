<?php

include("conexion.php");

$con=conectar();



$id_tarea=$_GET['id'];

$sql="DELETE FROM tarea  WHERE cod_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
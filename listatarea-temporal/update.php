<?php

include("conexion.php");
$con=conectar();

$id_tarea=$_POST['id_tarea'];
$tarea=$_POST['tarea'];

$sql="UPDATE tarea SET  id_tarea='$id_tarea',tarea='$tarea' WHERE id_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
<?php

include("conexion.php");
$con=conectar();

$id_tarea=$_POST['cod_tarea'];
$name_tarea=$_POST['tarea'];

$sql="UPDATE tarea SET tarea='$name_tarea' WHERE cod_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
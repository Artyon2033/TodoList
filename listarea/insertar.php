<?php



include("conexion.php");
$con=conectar();


$id_tarea=$_POST['cod_tarea'];
$name_tarea=$_POST['tarea'];



$sql="INSERT INTO tarea VALUES('$id_tarea','$name_tarea')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
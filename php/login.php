<?php

include("conexion.php");



$usuario = $_POST["usuario"];
$contra = $_POST["pass"];



$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contra'");

$fila = mysqli_num_rows($resultado);



if ($fila > 0){
    session_start();
    $_SESSION["cliente"] = $usuario;
    header("location:../nav/usuario.php");
}else {
    echo ' 
    <script>
        alert("El correo o la contraseña son invalidos");
        location.href = "../nav/acceder.php";
    </script>
    ';
}


mysqli_free_result($resultado);


mysqli_close($conexion);


?>
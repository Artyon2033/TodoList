<?php 
    //INCLUYE LA CONEXION
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tarea";
    $query=mysqli_query($con,$sql);
    // // $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> APP TODO LIST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <!-- FORMULARIO PARA INGRESAR DATOS DE LA TAREA -->
                            <h1>LISTA DE TAREAS</h1>
                            <!-- ENVIA EL BOTON A INSERTAR.PHP -->
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="cod_tarea" placeholder="Codigo">
                                    <input type="text" class="form-control mb-3" name="tarea" placeholder="Tarea">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <!-- CREACION DE LA TABLA -->
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tarea</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_tarea']?></th>
                                                <th><?php  echo $row['tarea']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_tarea'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_tarea'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
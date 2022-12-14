
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand h1">Mejaalex</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">¡Hola <?php echo $_SESSION['cliente']; ?>! </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="usuario.php" class="dropdown-item">Perfil</a></li>
                            <li><a href="../listarea/index.php" class="dropdown-item">Mis Tareas</a></li>
                            <li><a href="../php/cerrar_sesion.php" class="dropdown-item">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <script src="../js/bootstrap.bundle.min.js"></script>


</body>
</html>
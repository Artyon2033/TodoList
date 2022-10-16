<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceder</title>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<header class="cabezera">
		<div class=" cab_nav">
			<img src="../Imagenes/logotipo.png" alt="Logo" class="logo_img">
			<h2 class="nomb_logo">Web</h2>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li class="marca"><a href="acceder.php">Entrar</a></li>
			</ul>
		</div>
	</header>

	<div class="imagen_fondo">
		<img src="../imagenes/fondo3.jpg" alt="fondo">
	</div>


	<form action="../php/login.php" method="POST" class="formulario_ing">
		<h2 class="info_h2">Acceder</h2>
		<input type="text" class="formula" required placeholder="&#128113; usuario" name="usuario">
		<input type="password" class="formula" required placeholder="&#128272; Contraseña" name="pass">
		<input type="submit" class="enviar">
		<h5 class="nueva_cuenta">¿No tienes una cuenta?</h5>
		<a href="registrar.php" class="enlace_nuevaCuenta">Registrarse</a>
	</form>
</body>
</html>
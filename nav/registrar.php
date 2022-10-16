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

    <form action="../php/registro.php" method="POST" class="formulario_ing" id="registro_for">
		<h2 class="info_h2">Registrarse</h2>
		<input type="text" class="formula" required placeholder="&#128113; Nombre de Usuario" name="nombre">
        <input type="textarea" class="formula" required placeholder="&#128231; Correo Electronico" name="correo">
        <input type="tel" class="formula" required placeholder="&#128222; Telefono" name="telefono">
		<input type="password" class="formula" required placeholder="&#128272; Contraseña" name="contra">
		<input type="submit" class="enviar">
	</form>


    </form>

</body>
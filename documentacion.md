Aplicación TodoList
-1.Se creo la Base de Datos en phpmyadmin , que se llamara tutorial este tendrá 6 columnas:
id_cliente              primary key               int
rol                           varchar                      50
usuario                  varchar                      50
contraseña           varchar                      50
teléfono                varchar                      20
correo                   varchar                      50

--------------------------------------
Creamos la Carpeta Nav donde tendremos los archivos php

Creamos la Carpeta PHP donde tendremos los archivos php
	
1. Se procede a crear el archivo registro.php para que registre los datos ingresados a sus respectivas tablas, además le crearemos una restricción de usuario de solo uno con ese nombre, inserción de datos en la tabla,condiciones y cerramos la conexión.
2. Se procede a crear el archivo conexión.php ,donde se realizara la conexión con la base de datos con la variable $conexion en el cual estarán el:
servidor”localhost”, usuario”root”,contraseña””,nombre de la bd”tutorial”.
3. Se procede a crear el archivo sesión.php donde será la sesión de cada usuario lo conectaremos con los archivos nav.php y nav_s.php
4. Se procede a crear el archivo login.php  para que reciba los datos que están dando los usuarios, crearemos 2 variables usuario, contraseña y un resultado luego crearemos la variable fila que contendrá el mysql, crearemos un if y else dándole la condición de que si tiene datos que inicie sesión y si no los tiene que no inicie sesión.
5. Se procede a crear el archivo cerrar_sesion.php para poder cerrar la seion habierta por el usuario.


------------------------------------------
Creamos la carpeta NAV donde estaran otros archivos php

1. Se procede a crear el archivo registrar.php, será donde se podrán registrar los usarios que entren a la aplicación para que estos datos al llenar el formulario se guarden en la base de datos,
*lo conectaremos mediante un src al archivo estilo.css
*lo conectaremos al archivo index.php mediante un href
*lo conectaremos al archivo informacion.php mediante un href
lo conectaremos al archivo imágenes/fondo18.png para darle una imagen a nuestra fondo.
Lo conectamos a registro.php 

Luego procedderemos a crear los input para pedir que se registren el nombre de usuario,correo,teléfono,contraseña y terminamos por crear un botón para que diga que se lleno el formulario y que envie los datos a la base de datos

 lo conectaremos mediante un <form action=”../php/registro” method=”post” class=”formulario”>
2. Se procede a crear el archivo acceder.php en el cual crearemos el elemento form action el cual utilizaremos para conectarnos con login.php
3. Se procede a crear el archivo usuario.php donde se realiza la bienvenida con html y tendrá estilos de la carpeta css.
4. Se procede a crear el archivo nav_s.php esta conectado a boostrap.min.css donde se creo el menú conectado a index.php, cerrar_sesion.php, usuario.php.

-------------------------------------------
Creamos la carpeta CSS donde estaran archivos css
En esta carpeta están todos los estilos con el cual le daremos a nuestras ventanas
1. Creamos la carpeta boostrap.min.css para crear interfaces web con css.

Aplicación TodoList
-1.Se creo la Base de Datos en phpmyadmin , que se llamara tutorial este tendrá 6 columnas:
id_cliente              primary key               int
rol                           varchar                      50
usuario                  varchar                      50
contraseña           varchar                      50
teléfono                varchar                      20
correo                   varchar                      50


Creamos la Carpeta Nav donde tendremos los archivos php
-2.Se procede a crear el archivo conexión.php ,donde se realizara la conexión con la base de datos con la variable $conexion en el cual estarán el:
servidor”localhost”, usuario”root”,contraseña””,nombre de la bd”tutorial”.
-3.Se procede a crear el archivo registrar.php, será donde se podrán registrar los usarios que entren a la aplicación para que estos datos al llenar el formulario se guarden en la base de datos,
*lo conectaremos mediante un src al archivo estilo.css
*lo conectaremos al archivo index.php mediante un href
*lo conectaremos al archivo informacion.php mediante un href
lo conectaremos al archivo imágenes/fondo18.png para darle una imagen a nuestra fondo.
Lo conectamos a registro.php

Luego procedderemos a crear los input para pedir que se registren el nombre de usuario,correo,teléfono,contraseña y terminamos por crear un botón para que diga que se lleno el formulario y que envie los datos a la base de datos

 lo conectaremos mediante un <form action=”../php/registro” method=”post” class=”formulario”>	
-3.Se procede a crear el archivo registro

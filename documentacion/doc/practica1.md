Aplicación TodoList

-1.Se creo la Base de Datos en phpmyadmin , que se llamara tutorial, se crea la tabla usuarios este tendrá 6 columnas:
id_cliente              primary key               int
rol                           varchar                      50
usuario                  varchar                      50
contraseña           varchar                      50
teléfono                varchar                      20
correo                   varchar                      50

2.Se crea la tabla tarea este tiene 2 columnas.
Cod_tarea          int      primary key      int(11)
tarea                  varchar                   100


Creamos la Carpeta php donde tendremos los archivos .php
	
1. Se procede a crear el archivo registro.php donde crearemos la restricción de solo un usuario con ese nombre. 
2. Se procede a crear el archivo conexión.php ,donde se realizara la conexión con la base de datos tutorial.
3. Se procede a crear el archivo sesion.php donde será la sesión de cada usuario.
4.Se procede a crear el archivo login.php  para que confirme si los datos ingresados en nombre y contraseña son correctos para que ingrese.
5. Se procede a crear el archivo cerrar_sesion.php para poder cerrar la sesión abierta por el usuario.


Creamos la carpeta NAV donde estaran otros archivos .php

1. Se procede a crear el archivo registrar.php, será donde se podrán registrar los usuarios que entren a la aplicación para que estos datos al llenar el formulario se guarden en la base de datos.
2. Se procede a crear el archivo nav.php pagina general para hacer todolos los pasos de registrarse , entrar y el inicio
3. Se procede a crear el archivo usuario.php donde se realiza la bienvenida con html y tendrá estilos de la carpeta css.
4. Se procede a crear el archivo nav_s.php que será para los usuarios logeados para que puedan ver su pagina general y también su menú en el cual en este ultimo usaremos bootstrap.bundle.min.js.
5. Se procede a crear el archivo acceder.php en el cual se encuentra el formulario de llenar el nombre y la contraseña para poder acceder.
6.Se procede a crear el archivo index.php donde esta la pagina general el cual se conectara con estilos.css y se le agregara un video sin música para el inicio de la pagina.



Creamos la carpeta css donde estarán archivos .css

1. Se procede a crear el archivo boostrap.min.css para crear interfaces web con css.
2. Se procede a crear el archivo  parallax.php estará conectado a usuario ya que le dará estilos a este otro archivo.
3.Se crea el archivo Bootstrap.min.css para el estilo responsive.


Creamos la carpeta php donde estarán archivos php

1. Se procede a crear el archivo login.php donde el programa revisara si ya se registro consultando el nombre y la contraseña en la base de datos sean correctos para poder acceder.
2.  Se procede a crear el archivo registro.php donde el programa guardar los datos de registro de el usuario no registrado al llenar el formulario 
3. Se procede a crear el archivo sesion.php donde es donde el usuario tiene la información general
4. Se procede a crear el archivo conexion.php donde se establece la conexión con la base de datos tutorial 
5. Se procede a crear el archivo cerrar_sesion.php donde servirá para poder cerrar la sesión.


Creamos la carpeta listarea donde estarán archivos php que son de la lista de tareas

1. Se procede a crear el archivo index.php donde esta la lista de tareas además de que esta el formulario de ingresar código y tarea, tendremos todos los botones de enviar, eliminar y editar.
2. Se procede a crear el archivo actualizar.php el cual nos ayudara a actualizar cada vez que el usuario ingrese algo nuevo en el todolist.
3. Se procede a crear el archivo conexion.php para que al momento donde se cree la tarea este se vaya a la tabla tarea de la base de datos tutorial y se guarde la tarea hecha.
4. Se procede a crear el archivo eliminar.php para poder eliminar la tarea que el usuario ya no quiera
5. Se procede a crear el archivo insertar.php para insertar la nueva tarea creada por el usuario
6. Se procede a crear el archivo modificar.php para actualizar la tarea ya creada.


Creamos la carpeta imágenes

En esta carpeta están todas la imágenes que usaremos en los archivos php


Creamos la carpeta js

1. Se procede a crear el archivo bootstrap.bundle.min.js para crear las interfaces con un diseño responsive.

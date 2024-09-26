<!-- Desarrollar un sistema de gestión de películas. El sistema permitirá a los usuarios gestionar una base de datos de películas, incluyendo la capacidad de agregar nuevas películas, ver la lista de películas existentes, actualizar la información de las películas, y eliminar películas del sistema. 
A la base de datos ya existente, añadirle el campo imagen, que contendrá la imagen de portada de cada película. Si no existe imagen, muestra una imagen por defecto.

La interfaz debe incluir las siguientes páginas:Página de Inicio: Mostrar una tabla con la lista de todas las películas almacenadas en la base de datos. 

Área de usuario: 
Debes iniciar sesión, validando el usuario y la contraseña.
Agregar Película: Un formulario para agregar una nueva película a la base de datos.
Editar Película: Un formulario para editar los datos de una película existente.
Eliminar Película: Confirmar la eliminación de una película. -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
    <link rel="stylesheet" href="../CONTROLADOR/css/bootstrap.min.css">
  
</head>
<body></body>
</html> -->
<?php
// c = catálogo
if (!isset($_GET['c'])) {

  require_once "controlador/controlinicio.php";
  $controlador = new InicioControlador();

  call_user_func(array($controlador, 'estructura'));
} else {
  $controlador = $_GET['c'];
  require_once "controlador/$controlador.controlador.php";
  $controlador = ucwords($controlador) . 'Controlador';
  $controlador = new $controlador;
  //a = acción -> lo que se va a hacer. ej: Guardar, Borrar...
  $accion = isset($_GET['a']) ? $_GET['a'] : 'estructura';
  call_user_func(array($controlador, $accion));
}


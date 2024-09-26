<?php
class BaseDatos {


const SERVIDOR = 'localhost';
CONST USUARIOBD ='root';
CONST PASSBD =   '';
CONST NOMBREBD = 'peliculas';

//Utilizando PDO PARA HACER LA CONEXIÓN A LA BASE DE DATOS
public static function conectar (){
try {
    // Creamos una nueva instancia PDO para la base de datos
    $conexion = new PDO('mysql:host=' . self::SERVIDOR . ';dbname=' . self::NOMBREBD . ";charset=utf8", self::PASSBD, self::USUARIOBD);
    // Configuramos el modo de error PDO a excepciones para capturar y manejar los errores propios
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexion;
    // echo 'Conexión realizada con exito';
  } catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    die();

  }
 }
}


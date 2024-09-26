<?php
//?esto saliio de vision/inicio.php
include '../../CONTROLADOR/funciones/const.php';

$query = 'SELECT * FROM peliculas';
$sentenciaSQL =  $conexion->prepare($query);
try {
  $sentenciaSQL->execute();
} catch (PDOException $error) {
  echo "Error: " . $error->getMessage();
}
$listaPeliculas = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);





//?esto salió de vision/2usuario.php
if (isset($_POST['btnAcceder'])) {
  header('Location: inicio.php');
}
//! aqui va el codigo para el boton, btnAcceder  que a su ves tiene que mandar ese formulario a comprobar a 3validarUsuario.php y una vewz comprobadoo mandarme a 1inicio.php





//?esto salió de vision/5pagFinal.php 
include '../funciones/const.php';

// Mostar información en la lista 1 de pelis
$query = 'SELECT id, titulo, imagen FROM peliculas';
$SQL =  $this->pdo->prepare($query);
$SQL->execute();
$peliculas = $SQL->fetchAll(PDO::FETCH_ASSOC);
$contador = 1;
?>



?>

?>

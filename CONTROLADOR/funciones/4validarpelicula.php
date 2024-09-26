<?php
// include '../estructura/header.php';

// include 'const.php';

// $imagen = $_FILES['imagen']['name'];
// $imagent = $_FILES['imagen']['tmp_name'];


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $accion = $_POST['btnFormulario'];

//     switch ($accion) {
//         case 'agregar':
//             $titulo = $_POST['titulo'];
//             $director = $_POST['director'];
//             $genero = $_POST['genero'];
//             $anio = $_POST['anio'];
//             $duracion = $_POST['duracion'];
//             $pais = $_POST['pais'];
//             $clasificacion = $_POST['clasificacion'];
//             $imagen = $_FILES['imagen']['name'];
//             $sql = "INSERT INTO peliculas (titulo, director, anio, genero, duracion, pais, clasificacion, imagen) VALUES (:titulo, :director, :anio, :genero, :duracion, :pais, :clasificacion, :imagen)";
//             $stmt = $conexion->prepare($sql);
//             $stmt->bindParam(':titulo', $titulo);
//             $stmt->bindParam(':director', $director);
//             $stmt->bindParam(':anio', $anio);
//             $stmt->bindParam(':genero', $genero);
//             $stmt->bindParam(':duracion', $duracion);
//             $stmt->bindParam(':pais', $pais);
//             $stmt->bindParam(':clasificacion', $clasificacion);
//             $stmt->bindParam(':imagen', $imagen);
//             move_uploaded_file($_FILES['imagen']['tmp_name'], './img/' . $imagen);
//             $stmt->execute();
//             // me vas agregar ala base de datos "peliculas
//             break;
//         case 'actualizar':
            
//             // Obtener el ID del registro a actualizar (suponiendo que lo tienes en un campo oculto)
//             $id_pelicula = $_POST['id'];

//             $titulo = $_POST['titulo'];
//             $director = $_POST['director'];
//             $genero = $_POST['genero'];
//             $anio = $_POST['anio'];
//             $duracion = $_POST['duracion'];
//             $pais = $_POST['pais'];
//             $clasificacion = $_POST['clasificacion'];
//             $imagen = $_FILES['imagen']['name'];
//             $stmt = $conexion->prepare($sql);
//             $stmt->bindParam(':titulo', $titulo);
//             $stmt->bindParam(':director', $director);
//             $stmt->bindParam(':anio', $anio);
//             $stmt->bindParam(':genero', $genero);
//             $stmt->bindParam(':duracion', $duracion);
//             $stmt->bindParam(':pais', $pais);
//             $stmt->bindParam(':clasificacion', $clasificacion);
//             $stmt->bindParam(':imagen', $imagen);
//             $sql = "UPDATE peliculas SET titulo=:titulo, director=:director, anio=:anio, genero=:genero, duracion=:duracion, pais=:pais, clasificacion=:clasificacion, imagen=:imagen WHERE id=:id";

//             // Manejar la subida de imagen (si es necesario)
//             if (!empty($_FILES['imagen']['name'])) {
//                 // Código para actualizar la imagen
//                move_uploaded_file($_FILES['imagen']['tmp_name'], './img/'. $imagen);
//             $stmt->execute();
//             }
//             echo "Pelicula actualizada correctamente.";
 
//             // vas actualizar los datos de la base de datos peliculas
//             break;
//         case 'cancelar':
//             // eliminar la peli de l base de datos peliculas
//             case 'eliminar':
//                 // Obtener el ID de la película a eliminar
//                 $id_pelicula = $_POST['id'];
//                 $sql = "DELETE FROM peliculas WHERE id = :id_pelicula";
//                 $stmt = $conexion->prepare($sql);
            
//                 // Asignar el valor al parámetro
//                 $stmt->bindParam(':id_pelicula', $id_pelicula);
            
//                 // Ejecutar la consulta
//                 $stmt->execute();
            
//                 // Eliminar la imagen asociada (si es necesario)
                
            
//                 // Redirigir a una página de confirmación o mostrar un mensaje
//                 header("Location: mis_peliculas.php");
//                 break;
//             break;
//         default:
//             // me regresas a la pagina de pelis-user
//             break;
//     }
// }
include '../CONTROLADOR/funciones/script.php';

include '../CONTROLADOR/funciones/const.php';


if (isset($_POST['btnFormulario'])) {

  $accion = $_POST['btnFormulario'];

  $id = (isset($_POST['id'])) ? $_POST['id'] : '';
  $titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
  $director = (isset($_POST['director'])) ? $_POST['director'] : '';
  $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
  $anio = (isset($_POST['anio']) ? $_POST['anio'] : '');
  $duracion = (isset($_POST['duracion'])) ? $_POST['duracion'] : '';

  //*+++++++++++++++Imagen+++++++++++++++++++
  if (isset($_FILES['imagen'])) {
    $imgLibroName = $_FILES['imagen']['name'];
    $fecha = new DateTime();
    $imagenName = $fecha->getTimestamp() . "_" . $imgLibroName;

    $imgtemp = $_FILES['imagen']['tmp_name'];
    if ($imgtemp != '') {
      move_uploaded_file($imgtemp, '../MODELO/img/' . $imagenName);
    }
  } else {
    $imagenName = 'avatar-libro.jpg';
  }

  /**********************************/
  /************ AGREGAR *************/
  if ($accion == 'agregar') {
    $query = 'INSERT INTO `peliculas`(`id`, `titulo`, `director`, `anio`, `genero`, `duracion`,`imagen`) VALUES (:id, :titulo, :director, :anio, :genero, :duracion, :imagen)';

    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->bindParam(':id', $id);
    $sentenciaSQL->bindParam(':titulo', $titulo);
    $sentenciaSQL->bindParam(':director', $director);
    $sentenciaSQL->bindParam(':anio', $anio);
    $sentenciaSQL->bindParam(':genero', $genero);
    $sentenciaSQL->bindParam(':duracion', $duracion);
    $sentenciaSQL->bindParam(':imagen', $imagenName);
    try {
      $sentenciaSQL->execute();
      header('Location: ../VISION/estructura/5pagFinal.php');
      echo 'Libro agregado correctamente.';
    } catch (PDOException $error) {
      echo 'Error al agregar el libro: ' . $error->getMessage();
    }
  }


  /**********************************/
  /************ ACTUALIZAR **********/
  if ($accion == 'actualizar') {
    //? SI actualizamos la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['name'] != '') {
      $imgName = $_FILES['imagen']['name'];
      $fecha = new DateTime();
      $imagenName = $fecha->getTimestamp() . "_" . $imgName;
      $imgtemp = $_FILES['imagen']['tmp_name'];
      move_uploaded_file($imgtemp, '../MODELO/img/' . $imagenName);

      //? Borramos la imagen anterior
      $sentenciaSQL = $conexion->prepare($query);
      $sentenciaSQL->bindParam(':id', $id);
      $sentenciaSQL->execute();
      $imagenAnterior = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

       eliminarImagen($id, $imgtemp);
       $query = 'DELETE FROM peliculas WHERE id = :id';
       $sentenciaSQL = $conexion->prepare($query);
       $sentenciaSQL->bindParam(':id', $id);
       $sentenciaSQL->execute();
      }


      $query = 'UPDATE peliculas SET titulo=:titulo, director=:director, anio=:anio, genero=:genero, duracion=:duracion, imagen=:imagen WHERE id=:id';
      $sentenciaSQL = $conexion->prepare($query);
      $sentenciaSQL->bindParam(':imagen', $imagenName);
      $sentenciaSQL->bindParam(':id', $id);
     
    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->bindParam(':titulo', $titulo);
    $sentenciaSQL->bindParam(':director', $director);
    $sentenciaSQL->bindParam(':genero', $genero);
    $sentenciaSQL->bindParam(':anio', $anio);
    $sentenciaSQL->bindParam(':duracion', $duracion);
    $sentenciaSQL->bindParam(':id', $id);
    try {
      $valor = $sentenciaSQL->execute();
      header('Location: ../VISION/estructura/5pagFinal.php');
      echo 'Libro actualizado correctamente.';
    } catch (PDOException $error) {
      echo 'Error al actualizar : ' . $error->getMessage();
    }
  }

  /**********************************/
  /************ CANCELAR *************/
  if ($accion == 'cancelar') {
    header('Location: 1inicio.php');
  }


  /**********************************/
  /************ SELECCIONAR *********/
  if ($accion == 'seleccionar') {

    $query = 'SELECT * FROM peliculas WHERE id = :id';
    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->bindParam(':id', $id);
    $sentenciaSQL->execute();
    $peliculas = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);
  }

  /**********************************/
  /************ BORRAR *************/
  if ($accion == 'borrar') {

    $query = 'DELETE FROM peliculas WHERE id = :id';
    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->bindParam(':id', $id);
    $sentenciaSQL->bindParam(':imagen', $imagen);
   try {

      $sentenciaSQL->execute();
      // Eliminar la imagen asociada (si es necesario)
      eliminarImagen($id, '../img/'. $imagenName);
      header('Location: ./VISION/estructura/5pagFinal.php');
    } catch (PDOException $error) {
      echo 'Error al borrar la pelicula intentalo mas tarde: ' . $error->getMessage();
    }
  }

  
}
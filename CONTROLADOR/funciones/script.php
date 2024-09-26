<?php
 
include "const.php";
function eliminarImagen($id, $rutaImagen) {
    // Eliminar el registro de la base de datos
    $query = 'DELETE FROM peliculas WHERE id = :id';
    $sentenciaSQL = $conexion->prepare($query);
    $sentenciaSQL->bindParam(':id', $id);
    $sentenciaSQL->execute();

    // Eliminar el archivo físico
    if (file_exists($rutaImagen)) {
        if (unlink($rutaImagen)) {
            return true; // Imagen eliminada correctamente
        } else {
            // Manejar error al eliminar el archivo
            error_log("Error al eliminar el archivo: $rutaImagen");
            return false;
        }
    } else {
        // La imagen no existe en el sistema de archivos
        return true;
    }
}
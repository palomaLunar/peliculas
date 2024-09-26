<!-- aqui validamos el login , despues los pasamos a una segunda pagina con la lista de peliculas donde ya se pueden modificar los libros.-->
 
 <?php 
// Conexión a la base de datos (reemplaza con tus datos)

// $usuario = $_POST['usuario'];
// $password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar los datos para prevenir inyecciones SQL
    $usuario = filter_var($_POST['usuario'],(FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $password = $_POST['password']; // La contraseña se encriptará más adelante

    // Encriptar la contraseña antes de compararla con la base de datos
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuario WHERE username=:usuario AND userpass=:password_hash";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':password_hash', $password_hash);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: ../VISION/estructura/5pagFinal.php");
        exit();
    } else {
        // Usuario o contraseña incorrectos
        echo "Usuario o contraseña incorrectos.";
        header('location:../estructura/2usuario.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validar usuario </title>
</head>
<body>
    <h1> hola mundo </h1>
    
</body>
</html>
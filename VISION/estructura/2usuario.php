<!-- aqui va donde meter el logiin 
el usuariuo y contraseña, despues de presionar el boton 
""acceder""" que estara en el header.  -->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área usuario</title>
  <link rel="stylesheet" href="../CONTROLADOR/css/bootstrap.min.css">
</head>

<body>
  <main class="container">
    <div class="card col-5">
      <div class="card-header">LOGIN</div>
      <div class="card-body">
        <form action="../../CONTROLADOR/funciones/3validarUsuario.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control" id="username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <button type="submit" name="btnAcceder" class="btn btn-primary" valor="acceder" >Acceder</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
<?php
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/peliculas';

?>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<header>
  <nav class="navbar navbar-expand navbar-light bg-light d-flex justify-content-between mx-2">
    <div class="nav navbar-nav">
      <a class="nav-item nav-link active" href="<?= $url . "./VISION/estructura/1inicio.php"; ?>" aria-current="page">Inicio peliculas <span class="visually-hidden">(current)</span></a>




      <!--  -->
      <a class="nav-item nav-link" href="<?= $url . "./VISION/estructura/2usuario.php"; ?>">acceso usuarios</a>



      <!--  -->
      <a class="nav-item nav-link" href="<?= $url . "./VISION/estructura/5pagFinal.php" ?>"> Peliculas </a>
      <a class="nav-item nav-link" target="_blank" href="<?= $url; ?>">Ver sitio</a>
    </div>






    <!--  -->
    <div class="nav navbar-nav">
      <a class="nav-item nav-link bg-danger text-light rounded " href="<?= $url . './VISION/estructura/cerrarSesion.php' ?>">Cerrar sesión</a>
    </div>
  </nav>
</header>
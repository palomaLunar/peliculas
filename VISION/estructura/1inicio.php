<!-- aqui va el inicio se muestra la tabla de peliculas.  -->

  <main class="container col-12 flex-row d-flex gap-2 flex-wrap mt-2">
    <?php foreach ($listaPeliculas as $pelis): ?>
      <div class="card col-3">
        <img class="card-img-top" src="/modelo/img/avatar-libros.jpg <?= $pelis['imagen'] ?>" alt='titulo' />
        <div class="card-header"><strong><?= $pelis['titulo'] ?></strong> </div>
        <div class="card-body">  <?php
            $p = $this->modelo->Cantidad();
            echo $p->Cantidad;
            ?>
          <h3 class="card-title"><?= $pelis['director'] ?></h3>
          <h4 class="card-title"><?= $pelis['anio'] ?></h4>
          <p class="card-text"><?= $pelis['duracion'] ?></p>
        </div>
        <div class="card-footer"><?= $pelis['genero'] ?> </div>
      </div>
    <?php endforeach; ?>


  </main>




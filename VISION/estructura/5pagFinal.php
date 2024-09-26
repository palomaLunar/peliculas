aqui va la pagina que muestra los libros y se pueden hacer modificaciones,
PAGINA DE ACCESO A SOLO USUARIOS.


  <main class="container d-flex flex-row gap-2 mt-3">

    <!-- Formulario de peliculas -->
    <section class="col-5 border border-1">
      <h4>FORMULARIO peliculas</h4>
      <form action="../funciones/4validarpelicula.php" method="post" enctype="multipart/form-data" id="formulario">
      

        <input type="hidden" class="form-control" name="id" value="<?= empty($peliculas['id']) ? '' : $peliculas['id'] ?>" />



<!--    titulo       -->
        <div class="mb-3">
          <label for="titulo" class="form-label">Título:</label>
          <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Introduce el título de la pelicula" value="<?= empty($peliculas['titulo']) ? '' : $peliculas['titulo'] ?>" required />
        </div>




<!-- director -->
        <div class="mb-3">
          <label for="director" class="form-label">Director:</label>
          <input type="text" class="form-control" name="director" id="director" placeholder="Introduce el director" value="<?= empty($peliculas['director']) ? '' : $peliculas['director'] ?>" required />
        </div>




 <!-- genero      -->
        <div class="mb-3">
          <label for="genero" class="form-label">Género:</label>
          <input type="text" class="form-control" name="genero" id="genero" placeholder="Introduce el género de la pelicula"
          value="<?= empty($peliculas['genero']) ? '' : $peliculas['genero'] ?>" />
        </div>



<!-- Año de publicacion -->
        <div class="mb-3">
          <label for="anio" class="form-label">Año de publicación:</label>

          <input type="number" class="form-control" name="anio" id="anio" placeholder="Introduce el año del estreno" value="<?= empty($peliculas['anio']) ? '' : $peliculas['anio'] ?>" />
        </div>




 <!-- duracion -->
        <div class="mb-3">
          <label for="duracion" class="form-label">Duracion:</label>
          <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Introduce el duracion de la pelicula" value="<?= empty($peliculas['duracion']) ? '' : $peliculas['duracion'] ?>" />
        </div>




 <!-- pais -->
        <div class="mb-3">
          <label for="pais" class="form-label">pais:</label>
          <input type="text" class="form-control" name="pais" id="pais" placeholder="Introduce el pais de la pelicula" value="<?= empty($peliculas['pais']) ? '' : $peliculas['pais'] ?>" />
        </div>






 <!-- clasificacion -->
        <div class="mb-3">
          <label for="clasificacion" class="form-label">clasificacion:</label>
          <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Introduce el clasificacion de la pelicula" value="<?= empty($peliculas['clasificacion']) ? '' : $peliculas['clasificacion'] ?>" />
        </div>







 <!-- imagen -->

        <div class="mb-3">
          <label for="imagen" class="form-label">
            Imagen :
            <?php if (!empty($peliculas['imagen'])) : ?>
              <img src="<?= './img/' .  $peliculas['imagen'] ?>" alt=" <?= $peliculas['imagen'] ?>" width="200">
            <?php endif; ?>
          </label>
          <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Introduce la portada de la pelicula" />
        </div>




 <!-- botones  formulario -->
        
        <div class="btn-group d-flex gap-2 m-3" role="group" aria-label="Button group name">
          <button type="submit" name="accion" value="agregar" class="btn btn-primary rounded" <?php if (!empty($peli['id'])) echo 'hidden'; ?>> Agregar </button>


          --
          <button type="submit" name="accion" value="actualizar" class="btn btn-success rounded" <?php if (empty($peli['id'])) echo 'hidden'; ?>>
            Actualizar
          </button>



          --
          <button type="submit" name="accion" value="cancelar" class="btn btn-danger rounded">
            Cancelar
          </button>
        </div>
      </form>
    </section>



    <!-- Lista de peliculas -->


    <section class=" col-7 border border-1">
      <!-- Mostrar los peliculas en una tabla -->
      <h4>Listado de peliculas</h4>
       <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Nº</th>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($peliculas as $peli) : ?>
              <tr class="">
                <td scope="row"><?= $contador++; ?></td>
                <td><?= $peli['titulo'] ?></td>
                <td>
                  <img src="<?= '../img/' . $peli['imagen'] ?>" alt="<?= $peli['titulo'] ?>" width="100" class="img-thumbnail">
                </td>
                <td>

                 //!botones del listado de las peliculas 

                  <form action="../funciones/4validarpelicula.php" method="post" id="formulariopelis">
                    <input type="hidden" name="id" value="<?= $peli['id'] ?>">
                    <button type="submit" name="accion" value="agregar" class="btn btn-dark rounded">
                    Agregar
                    </button>
                    <input type="hidden" name="id" value="<?= $peli['id'] ?>">
                    <button type="submit" name="accion" value="seleccionar" class="btn btn-dark rounded">
                      Seleccionar
                    </button>
                    <input type="hidden" name="id" value="<?= $peli['id'] ?>">
                    <button type="submit" name="accion" value="actualizar" class="btn btn-dark rounded">
                     Actualizar
                    </button>
                    <button type="submit" name="accion" value="borrar" class="btn btn-danger rounded">
                      Borrar
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>

    </section>
  </main>

<script src="controlBotones.js"></script>
</body>

</html>
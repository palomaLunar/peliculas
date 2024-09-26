<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4"><?= $titulo ?></h1>
    <ol class="breadcrumb mb-4">
      <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
      <li class="breadcrumb-item"><a href="?c=pelicula">peliculas</a></li>
      <li class="breadcrumb-item"><?= $titulo ?></li>

    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <?= $titulo ?> peliculas
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <?= $titulo ?> peliculas
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="card-body">
              <form method="post" action="?c=peliculas&a=Guardar">
                <!-- Hidden input para el id del producto -->
                <input type="hidden" id="idp" name="idp" value="<?= $p->getPro_id() ?>" />

                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputtitulo"
                        type="text"
                        name="titulo"
                        value="<?= $p->getPro_titulo() ?>" />
                      <label for=" inputtitulo">titulo</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        class="form-control"
                        id="inputLastName"
                        type="text"
                        name="director"
                        value="<?= $p->getPro_director() ?>" />
                      <label for="inputdirector">director</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputgenero"
                        type="text"
                        name="genero"
                        value="<?= $p->getPro_genero() ?>" />
                      <label for="inputgenero">genero</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputanio"
                        type="number"
                        name="anio"
                        value="<?= $p->getPro_anio() ?>" />
                      <label for=" inputanio">anio</label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputduracion"
                        type="number"
                        name="duracion"
                        value="<?= $p->getPro_duracion() ?>" />
                      <label for="inputduracion">duracion</label>
                    </div>
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputpais"
                        type="text"
                        name="pais"
                        value="<?= $p->getPro_pais() ?>" />
                      <label for="inputpais">pais</label>
                    </div>
                    <div class="form-floating mb-3 mb-md-0">
                      <input
                        class="form-control"
                        id="inputclasificacion"
                        type="text"
                        name="clasificacion"
                        value="<?= $p->getPro_clasificacion() ?>" />
                      <label for="inputclasificacion">clasificacion</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <input
                      class="form-control"
                      id="inputImagen"
                      type="file"
                      name="imagen" />
                    <label for="inputImagen"></label>
                  </div>
                </div>

                <div class="mt-4 mb-0 text-center">
                  <button
                    type="submit"
                    class="btn btn-primary">
                    Enviar
                  </button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<?php

require_once "MODELO/conexionYmodelos.php";

class peliculaControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new pelicula();
  }

  public function Inicio()
  {
    require_once "views/encabezado.php";
    require_once "views/pelicula/index.php";
    require_once "views/pie.php";
  }

  /** CREAR pelicula */
  public function CrearProd()
  {
    $titulo = "Registrar";
    $p = new pelicula();
    //He entrado a la opción de actualizar
    if (isset($_GET['id'])) {
      $p = $this->modelo->Obtener($_GET['id']);
      $titulo = "Actualizar";
    }

    require_once "views/encabezado.php";
    require_once "views/pelicula/crear.php";
    require_once "views/pie.php";
  }


  /** GUARDAR pelicula */
  public function Guardar()
  {
    $p = new pelicula();
    $p->setPro_id(intval($_POST['idp']));
    $p->setPro_titulo($_POST['titulo']);
    $p->setPro_director($_POST['director']);
    $p->setPro_genero($_POST['genero']);
    $p->setPro_anio($_POST['anio']);
    $p->setPro_duracion($_POST['duracion']);
    $p->setPro_pais($_POST['pais']);
    $p->setPro_clasificacion($_POST['clasificacion']);
    //Si el id está vacío es porque es un nueva pelicula
    $p->getPro_id() > 0
      ? $this->modelo->Actualizar($p)
      : $this->modelo->Insertar($p);
    header("Location:?c=pelicula");
  }

  /* BORRAR pelicula */
  public function Borrar()
  {
    $this->modelo->Eliminar($_GET['id']);
    header("Location:?c=pelicula");
  }
}

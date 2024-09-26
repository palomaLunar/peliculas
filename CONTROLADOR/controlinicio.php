<?php
require_once "MODELO/conexionYmodelos.php";

class InicioControlador
{
  private $modelo;
  public function __construct()
  {
    $this->modelo = new pelicula();
  }

  public function Inicio()
  {
    require_once "vision/estructura/header.php";
    require_once "vision/estructura/1inicio.php";
    require_once "vision/estructura/footer.php";
  }
}
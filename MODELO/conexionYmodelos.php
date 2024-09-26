<?php 
require_once "controlador/funciones/const.php";

class pelicula
{
  private $pdo;

  private $prod_id;
  private $prod_titulo;
  private $prod_director;
  private $prod_genero;
  private $prod_anio;
  private $prod_duracion;
  private $prod_pais;
  private $prod_clasificacion; 
  private $prod_imagen; 

  
  public function __construct()
  {
    $this->pdo = BaseDatos::Conectar();
  }
  /* MÉTODOS GETTERS Y SETTERS */

  //* id

  public function getPro_id(): ?int
  {
    return $this->prod_id;
  }
  public function setPro_id(int $id)
  {
    $this->prod_id = $id;
  }

  //* titulo

  public function getPro_titulo(): ?string
  {
    return $this->prod_titulo;
  }
  public function setPro_titulo(string $titulo)
  {
    $this->prod_titulo = $titulo;
  }

  //* director

  public function getPro_director(): ?string
  {
    return $this->prod_director;
  }
  public function setPro_director(string $director)
  {
    $this->prod_director = $director;
  }

   //* genero

   public function getPro_genero(): ?string
   {
     return $this->prod_genero;
   }
   public function setPro_genero(string $genero)
   {
     $this->prod_genero = $genero;
   }
  //* anio publicacion

  public function getPro_anio(): ?float
  {
    return $this->prod_anio;
  }
  public function setPro_anio(float $anio)
  {
    $this->prod_anio = $anio;
  }

  //* duracion

  public function getPro_duracion(): ?float
  {
    return $this->prod_duracion;
  }
  public function setPro_duracion(float $duracion)
  {
    $this->prod_duracion = $duracion;
  }

  //* pais

  public function getPro_pais(): ?string
  {
    return $this->prod_pais;
  }
  public function setPro_pais(string $pais)
  {
    $this->prod_pais = $pais;
  }
   //* clasificacion

   public function getPro_clasificacion(): ?string
   {
     return $this->prod_clasificacion;
   }
   public function setPro_clasificacion(string $clasificacion)
   {
     $this->prod_clasificacion = $clasificacion;
   }

  //* imagen

  public function getPro_imagen(): ?string
  {
    return $this->prod_imagen;
  }
  public function setPro_imagen($imagen)
  {
    $this->prod_imagen = $imagen;
  }


  /***************************************************************/
  /********************AHORA VAMOS A CREAR OTROS MÉTODOS**********/

  /** MÉTODO CANTIDAD */
  public function Cantidad()
  {
    try {
      $sql = "SELECT SUM(cantidad) as Cantidad FROM peliculas;";

      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();

      return $consulta->fetch(PDO::FETCH_OBJ);
      //

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /** MÉTODO LISTAR peliculaS */

  public function Listar()
  {
    try {
      $sql = "SELECT * FROM peliculas";
      $consulta = $this->pdo->prepare($sql);
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA INSERTAR peliculaS */
  public function Insertar(pelicula $p)
  {
    try {
      $sql = "INSERT INTO peliculas (titulo,  director, genero, anio, duracion, pais, clasificacion, imagen) VALUES (:titulo,  :director, :genero, :anio, :duracion, :pais, :clasificacion, :imagen)";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":titulo", $p->getPro_titulo());
      $consulta->bindParam(":director", $p->getPro_director());
      $consulta->bindParam(":genero", $p->getPro_genero());
      $consulta->bindParam(":anio", $p->getPro_anio());
      $consulta->bindParam(":duracion", $p->getPro_duracion());
      $consulta->bindParam(":pais", $p->getPro_pais());
      $consulta->bindParam(":clasificacion", $p->getPro_clasificacion());
      $consulta->bindParam(":imagen", $p->getPro_imagen());
      $consulta->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }


  /* MÉTODO PARA OBTENER pelicula SELECCIONADO */
  public function Obtener($id)
  {
    try {
      $sql = "SELECT * FROM peliculas WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
      $res = $consulta->fetch(PDO::FETCH_OBJ);

      $p = new pelicula();
      $p->setPro_id($res->id);
      $p->setPro_titulo($res->titulo);
      $p->setPro_director($res->director);
      $p->setPro_genero($res->genero);
      $p->setPro_anio($res->anio);
      $p->setPro_duracion($res->duracion);
      $p->setPro_pais($res->pais);
      $p->setPro_clasificacion($res->clasificacion);
      $p->setPro_imagen($res->imagen);
      return $p;
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }

  /* MÉTODO PARA ACTUALIZAR pelicula */
  public function Actualizar(pelicula $p)
  {
    try {
      $sql = "UPDATE peliculas SET titulo = :titulo, marca = :marca, costo = :costo, precio = :precio, cantidad = :cantidad, imagen = :imagen WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $p->getPro_id());
      $consulta->bindParam(":titulo", $p->getPro_titulo());
      $consulta->bindParam(":director", $p->getPro_director());
      $consulta->bindParam(":genero", $p->getPro_genero());
      $consulta->bindParam(":anio", $p->getPro_anio());
      $consulta->bindParam(":duracion", $p->getPro_duracion());
      $consulta->bindParam(":pais", $p->getPro_pais());
      $consulta->bindParam(":clasificacion", $p->getPro_clasificacion());
      $consulta->bindParam(":imagen", $p->getPro_imagen());
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }


  /* MÉTODO PARA ELIMINAR pelicula */
  public function Eliminar($id)
  {
    try {
      $sql = "DELETE FROM peliculas WHERE id = :id";
      $consulta = $this->pdo->prepare($sql);
      $consulta->bindParam(":id", $id);
      $consulta->execute();
    } catch (PDOException $e) {
      die("ERROR: " . $e->getMessage());
    }
  }
}

<?php

include 'db.php';
/**
 *
 */
class pedidos extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();

  }


  //Funciones para la inserccion
  public function crearpedido($nombre,$apellidos,$talla,$numero){

    if ($this->hayError()==true){
        return null;

    }else{

      $sqlInserction="INSERT INTO pedidos(id,nombre,apellidos,talla,numero,precio) VALUES (NULL,'".$nombre."','".$apellidos."','".$talla."','".$numero."',NULL,'')";

      $this->conexion()->query($sqlInserction);
    }

  }

  // Mostrar ultimo equipo
  public function listapedido($nombre){

    if ($this->hayError()==true){
		return null;

	}else{

		$resultado = $this->conexion()->query("SELECT * FROM pedidos WHERE nombre='".$nombre."'");
		return $resultado->fetch_assoc();
	}

	}

  public function listapedidos($nombre){

    if ($this->hayError()==true){
    return null;

  }else{

    $resultado = $this->conexion()->query("SELECT * FROM pedidos WHERE nombre='".$nombre."'");
    return $resultado->var_dump();
  }

  }

}

?>

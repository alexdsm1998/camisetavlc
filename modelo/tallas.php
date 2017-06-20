<?php

include 'db.php';
/**
 *
 */
class tallas extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();

  }

  public function listartallas($talla){

    if ($this->hayError()==true){
		return null;

	}else{

		$resultado = $this->conexion()->query("SELECT * FROM tallas WHERE talla='".$talla."'");
		return $resultado->fetch_assoc();
	}

	}
  public function insertartalla($talla){

    if ($this->hayError()==true){
		return null;

	}else{

    $sqlInserction="INSERT INTO tallas(id,talla) VALUES (NULL,'".$talla."')";

    $this->conexion()->query($sqlInserction);
  }

}
	}

	}



}

?>

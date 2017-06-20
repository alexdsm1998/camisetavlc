<?php
/**
 * Clase encargada del control de seguridad de la app,usuarios despues cookies
 */
class sesionusuario{

  private $usuario=null;
  private $numAbonado=null;
  private $apellidos=null;
  //viene el sesion start en el construct, despues genero funciones para aladir el usuario y poder entrar para despues hacer logout
  function __construct()
  {
    //Arrancamos la sesion
    session_start();
    if(isset($_SESSION["nombre"])) $this->usuario=$_SESSION["nombre"];
  }
  public function getnombre(){
    return $this->nombre;
  }
  public function adddatossesion($nombre){
    $_SESSION["nombre"]=$nombre;
    $this->nombre=$nombre;
    $_SESSION["numAbonado"]=$numAbonado;
    $this->numAbonado=$numAbonado;
    $_SESSION["apellidos"]=$apellidos;
    $this->apellidos=$apellidos;
  }
  public function logOut(){
    $_SESSION=[];
    session_destroy();
  }

}
 ?>

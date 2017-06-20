<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar pedidos</title>
  </head>
  <body>
    <?php
    //comprobacion del formulario
    if (empty($_POST['nombre'])==false && empty($_POST['apellidos'])==false && empty($_POST['talla'])==false &&
        empty($_POST['numero'])==false) {
      include 'modelo/pedidos.php';
      $pedido=new pedidos();
      $resultado=$pedido->crearpedido($_POST["nombre"],  $_POST["apellidos"], $_POST["talla"], $_POST["numero"]);
      //último registro.
      echo "<h1>ULTIMO REGISTRO:</h1> <hr> <br>";
      $tablapedido=$pedido->listapedido($_POST["nombre"]);
      foreach ($tablapedido as $fila) {
        echo "nombre: ".$fila['nombre']."<br>";
        echo "apellidos: ".$fila['apellidos']."<br>";
        echo "talla: ".$fila['talla']."<br>";
        echo "numero: ".$fila['numero']."<br>";
      }
    }else {
      echo "<a href='pedidoform.php'> Debes rellenar todos los campos </a>";
    }
     ?>
  </body>
</html>

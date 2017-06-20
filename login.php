<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <?php
  	
  		if ((isset($_POST['usuario'])) && (!empty($_POST['usuario'])) &&
  		(isset($_POST['pass'])) && (!empty($_POST['pass']))){

  				include 'modelo/usuarios.php';
  				include 'Seguridad/sesionusuario.php';
  				$login = new usuario();
  				$sesionusuario = new seguridad();
  				$resultado=$comprobarusuario->comprobarusuario($_POST['nombre']);

  					if ($resultado['nombre']==$_POST['nombre']){
  						echo "Usuario encontrado<br>";
  						if ((sha1($_POST['numAbonado'])==($resultado['numAbonado']))){
  							echo "Logeado correctamente.<br><br>";
  							$seguridad->adddatossesion($resultado['usuario']);
  							echo "Inicia sesion en la pagina de  <a href=loginform.php?nombre=".$resultado['nombre'].">llogin</a>";

  							}else{
  							echo "Los datos no coinciden, vuelve a <a href=loginform.php>logearte</a><br><br>";
  							}
  						}else {
  							echo "Si no tienes cuenta, registrate aquí <a href=registroform.php>REGISTRO</a><br><br>";
  							}
  						}
  		?>
  </body>
  </html>

  </body>
</html>

<?php
		//Monstramos los errores para saber si esta funcionando nuestro código
		error_reporting(E_ALL);
		INI_SET('display_errors', 1);

		//Con require_once abrimos el archivo y pegamos el codigo de error
		//require_once('display_error.php');
?>

<!DOCTYPE html>
<html>
		<body>
			<form method="POST" action="ingresar2.php">
				<p>Usuario: </p>
				<input type = "text" name= "usuario">
				<p>Contraseña: </p>
				<input type = "text" name= "pass">
				<br />
				<input type="submit" name="entrar" value = "Ingresar">
			</form>

			<form method="POST" action="ingresar2.php">
				<p>Usuario: </p>
				<input type = "text" name= "usuario">
				<p>Contraseña: </p>
				<input type = "text" name= "pass">
				<br />
				<input type="submit" name="insertar" value = "Agregar">
			</form>
		</body>
</html>

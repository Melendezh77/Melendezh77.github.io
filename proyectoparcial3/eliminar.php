<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>eliminar</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "lamborghini";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$id=$_GET["id"];

			$sql = "DELETE FROM autos WHERE id=$id";
			$data = $conexion->query($sql); 

			if ($conexion->query($sql) === TRUE) {
			    echo "Auto eliminado <a href='consultarAutos.php'>Regresar</a>";
			} else {
			    echo "Error deleting record: " . $conn->error;
			}
			
	 ?>
</body>
</html>
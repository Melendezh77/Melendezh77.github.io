<?php 
		$server="localhost";
		$username = "root";
		$pass = "";
		$db= "lamborghini";

		$conexion = new mysqli ($server, $username, $pass, $db);

		if($conexion->connect_error){
				die("Error en la conexión: " . $conexion->connect_error);
		}

		$id = $_POST["id"];
		$modelo = $_POST["modelo"];
		$hp = $_POST["hp"];
		$precio = $_POST["precio"]; 

		$sql = "UPDATE autos SET modelo='$modelo', hp='$hp', precio='precio' WHERE id=$id";

		if ($conexion->query($sql) === TRUE) {
   			 echo "Registro de auto modificado <a href='consultarAutos.php'>Regresar</a>";
		} else {
			echo "ocurrió un error";
			echo $conexion->error;
			echo $sql;
		}
		$conexion->close();
 ?>
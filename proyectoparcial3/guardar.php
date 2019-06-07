<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "lamborghini";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}

			$modelo = $_POST["modelo"];
			$precio = $_POST["hp"];
			$hp = $_POST["precio"];

			$sql = "INSERT INTO autos (modelo, hp, precio)
							VALUES ('$modelo', '$hp', '$precio')";

			if($conexion->query($sql) === TRUE){
				echo "Registro insertado <a href='registro.php'>Regresar</a>";
			} else {
				echo "Error: " .$sql. "<br>" . $conexion->error;
			}
 ?>








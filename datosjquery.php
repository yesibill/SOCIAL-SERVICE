<?php
		function insert ($id, $nombre, $apellido, $genero, $ecivil){
			$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
			$id = $_POST['codigo'];
			$nombre = $_POST['llamado'];
			$apellido = $_POST['lastname'];
			$genero = $_POST['gene'];
			$ecivil = $_POST['estado'];
			
			$query = "INSERT INTO DATOS (ID, NOMBRE, APELLIDO, GENERO, ECIVIL) VALUES ('$id', '$nombre', '$apellido', '$genero', '$ecivil')";
			$ejecutar = oci_parse($conexion, $query);
			
			if(oci_execute($ejecutar)){
				$arre = array ('retorno'=> '1','mensaje' => 'registro exitoso');
				return $arre;
			}
			else {
				$arre = array ('retorno'=> '0','mensaje' => 'no se registro');
				return $arre;
			}
		}
		
			$id = $_POST['codigo'];
			$nombre = $_POST['llamado'];
			$apellido = $_POST['lastname'];
			$genero = $_POST['gene'];
			$ecivil = $_POST['estado'];
		
		$mensaje = insert($id, $nombre, $apellido, $genero, $ecivil);
		
		echo json_encode ($mensaje);
?>
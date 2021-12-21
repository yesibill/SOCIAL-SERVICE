<?php
		function eliminar($matricula){
		
			$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
			
			// $matricula = $_POST['matricula'];
			
			$query = "DELETE FROM ALUMNO WHERE MATRICULA = '$matricula'";
			$eliminar = oci_parse($conexion,$query);
				
   
				if(oci_execute($eliminar)) {
					$msj = array ('retorno'=> '1','mensaje' => 'Registro Eliminado');
					
					return $msj;
				}
				else {
					$msj = array ('retorno'=> '0','mensaje' => 'Error al Eliminar');
					return $msj;
				}
	}
	
	$matricula = $_POST['matricula'];
	
	$mensaje = eliminar($matricula);
	echo json_encode ($mensaje);
	
?>
<?php
function agregar($matricula, $nombre,$apellido, $genero, $ecivil, $correo, $semestre, $grupo, $municipio, $facultad){
	
	$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
	
	if($matricula != "")
	{
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$genero = $_POST['genero'];
		$ecivil = $_POST['ecivil'];
		$correo = $_POST['correo'];
		$semestre = $_POST['semestre'];
		$grupo = $_POST['grupo'];
		$municipio = $_POST['municipio'];
		$facultad = $_POST['facultad'];
		
		$query = "INSERT INTO ALUMNO (MATRICULA,NOMBRE,APELLIDO,GENERO,ECIVIL,CORREO,SEMESTRE,GRUPO,MUNICIPIO,CODIGO_FA)
		VALUES('$matricula','$nombre','$apellido','$genero','$ecivil','$correo','$semestre','$grupo','$municipio','$facultad')";
		$insertar = oci_parse($conexion, $query);
		
		if(oci_execute($insertar)) {
			$msj = array ('retorno' => '1','mensaje' => 'Registro Exitoso');
			return $msj;
		}
		else {
			$msj = array ('retorno' => '0','mensaje' => 'Registro Fallido');
			return $msj;
		}
	}
}

		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$genero = $_POST['genero'];
		$ecivil = $_POST['ecivil'];
		$correo = $_POST['correo'];
		$semestre = $_POST['semestre'];
		$grupo = $_POST['grupo'];
		$municipio = $_POST['municipio'];
		$facultad = $_POST['facultad'];
		
		$mensaje = agregar($matricula, $nombre,$apellido, $genero, $ecivil, $correo, $semestre, $grupo, $municipio, $facultad);
		
		echo json_encode ($mensaje);	
?>
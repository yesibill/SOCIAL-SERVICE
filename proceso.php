<?php 

	$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');


		$idt = $_POST['id'];
		$nombre = $_POST['nombre'];
		$municipio = $_POST['municipio'];

		
		$query = "UPDATE TIENDA SET NOMBRE='$nombre', MUNICIPIO='$municipio' WHERE ID_TIENDA='$idt'";
		$insertar = oci_parse($conexion, $query);
		oci_execute($insertar);

		if ($insertar)
		{
			header ("Location: insert.php");
		}
		else {
			echo "asdfg";
		}
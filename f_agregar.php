<?php
function agregar($nombre,$municipio){
	
	$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
	
	if($nombre != "")
	{
		$nombre = $_POST['nombre'];
		$municipio = $_POST['municipio'];
		
		$query = "INSERT INTO TIENDA (NOMBRE, MUNICIPIO) VALUES('$nombre','$municipio')";
		$insertar = oci_parse($conexion, $query);
		
		if(oci_execute($insertar))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
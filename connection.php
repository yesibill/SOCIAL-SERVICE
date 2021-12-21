<?php

$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');

if (!$conexion){
echo "no se puede conectar a la base de datos";
}

//else { echo "se puede conectar a la base de datos";}

/*$query = "select * from tienda";

$resultado = oci_parse($conexion, $query);

oci_execute($resultado);

while ($fila1 = oci_fetch_assoc($resultado))
{
	print_r ($fila1);
}*/



?>
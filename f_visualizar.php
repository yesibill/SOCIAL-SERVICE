<?php
	function visualizar(){
	 
	$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
    $query = "SELECT * FROM TIENDA";
	$resultado = oci_parse($conexion, $query);
	
	if(oci_execute($resultado))
	{
						
			echo"<table>
			<tr>
				<th>ID_Tienda</th>
				<th>Nombre</th>
				<th>Municipio</th>
				<th>Eliminar</th>
				<th>Editar</th>
			</tr>";
	
		while($datos =oci_fetch_assoc($resultado))
		{	
			echo "<tr>
					<td>$datos[ID_TIENDA]</td>
					<td>$datos[NOMBRE]</td> 
					<td>$datos[MUNICIPIO]</td>
					<td><a href='insert.php?ID_TIENDA=$datos[ID_TIENDA]&accion=eliminar'><img src='eliminar.png'></a</td>
					<td class='editar'><a href='modificar.php?ID_TIENDA=$datos[ID_TIENDA]&accion=editar'><img src='editar.png'></a></td>
				  </tr>";
		}
			echo "</table>";	
			return true;	
			return true;	
	}
	
	else
	{
		return false;
	}
	
 }
?>	
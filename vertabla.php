<?php
		function ver(){
			$conexion = oci_connect('daniela', 'servicio', '10.30.15.175/xe','AL32UTF8');
			$query = "SELECT * FROM ALUMNO";
			$resultado = oci_parse($conexion, $query);
			
			if(oci_execute($resultado)){
				echo" <table id = 'tabla'>
						<thead>
							<tr>
								<th>Matricula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Genero</th>
								<th>Edo. civil</th>
								<th>Correo</th>
								<th>Semestre</th>
								<th>Grupo</th>
								<th>Municipio</th>
								<th>Facultad</th>
								<th>Eliminar</th>
								<th>Editar</th>
							</tr>
						</thead>
				";
				while($datos = oci_fetch_assoc($resultado)){
					echo"<tbody>
							<tr>
								<td>$datos[MATRICULA]</td>
								<td>$datos[NOMBRE]</td>
								<td>$datos[APELLIDO]</td>
								<td>$datos[GENERO]</td>
								<td>$datos[ECIVIL]</td>
								<td>$datos[CORREO]</td>
								<td>$datos[SEMESTRE]</td>
								<td>$datos[GRUPO]</td>
								<td>$datos[MUNICIPIO]</td>
								<td>$datos[CODIGO_FA]</td>							
							    <td class ='eliminar'> <a href='javascript:abrir(\"$datos[MATRICULA]\");' ><img src='eliminar.png'></a> </td>
								<td class='editar'><a href='javascript:abrirEdit(\"$datos[MATRICULA]\");' ><img src='editar.png'></a></td>
							</tr>
						</tbody>
					";
				}
				echo "</table>";	
				return true;
			}
			else{
				return false;
			}
		}
		//<td class ='eliminar'> <a href='javascript:abrir($datos[MATRICULA])' onclick = 'eliminar(\"$datos[MATRICULA]\")' ><img src='eliminar.png'></a</td>
?>
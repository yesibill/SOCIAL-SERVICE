<?php
 function modificar(){
$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');


	if(isset($_GET['accion']))
		{
			if($_GET['accion'] == "editar")
			{
				$query = "SELECT * FROM TIENDA WHERE ID_TIENDA='$_GET[ID_TIENDA]'";
				$resultado = oci_parse($conexion, $query);
			    oci_execute($resultado);
				$datos = oci_fetch_assoc($resultado);

	echo"<html>";
			echo"<head>";
				echo"<link rel='stylesheet' type='text/css' href='style.css'>";
				echo"<link href='https://fonts.googleapis.com/css?family=Kurale' rel='stylesheet'>";
				echo"<title>Editar PHP y ORACLE.</title>";
				echo"<meta charset='utf-8' />";
			echo"</head>"; 
					
				
			echo"<header>";
				echo"<div class='formulario' style='text-align: center;'> Formulario 2.</div>";
				echo"<p>Modifique los datos requeridos.</p>";
			echo"</header>";
				
			echo"<form method= 'post' >";
				echo"<div class='contenedor'>";
					echo"<label class='centrar'>Id Tienda: </label>";
					echo"<input type='text' readonly='readonly' name='id' class='text' value= $datos[ID_TIENDA] ><br><br/>";
					
					echo"<label class='centrar'>Nombre(s): </label>";
					echo"<input type='text' name='nombre' class='text' value= $datos[NOMBRE]><br><br/>";
											
					echo"<label class='centrar'>Municipio: </label>";
					echo"<select name='municipio' id='esc_municipio'>";
                    echo"<option value=''>-SELECCIONE UNA OPCION-</option>";
                    echo"<option value='Tuxtla Gutierrez'=$datos[MUNICIPIO] == 'Tuxtla Gutierrez'? 'selected': '' > Tuxtla Gutierrez</option>";
                    echo"<option value='San cristobal'=$datos[MUNICIPIO] == 'San cristobal'? 'selected': ''> San cristobal</option>";
                    echo"<option value='Arriaga'=$datos[MUNICIPIO] == 'Arriaga'? 'selected': '' > Arriaga</option>";
                    echo"<option value='Ocosingo'=$datos[MUNICIPIO] == 'Ocosingo'? 'selected': '' >Ocosingo</option>";
                    echo"<option value='Cintalapa'=$datos[MUNICIPIO] == 'Cintalapa'? 'selected': '' >Cintalapa</option>";
                echo"</select><br/><br/>";
		
				extract($_POST);
                $conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
                $queryInsert = "SELECT MUNICIPIO FROM TIENDA WHERE ID_TIENDA = ID_TIENDA";
				$Municipio = oci_parse($conexion, $queryInsert);
				oci_execute($Municipio);
                
                
                    
		
								
					echo"<input type='submit' name='submit' class='btnsubmit' value='Enviar' />";
				echo"</div>";
			echo"</form>";
		echo"</html>";


			}
		}
		}
?>
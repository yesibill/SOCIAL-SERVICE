<?php
 function actualizar($ID_TIENDA, $NOMBRE, $MUNICIPIO)
 {
	 
	$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');

		$ID_TIENDA = $_POST['ID_TIENDA'];
		$NOMBRE = $_POST['NOMBRE'];
		$MUNICIPIO = $_POST['MUNICIPIO'];

		$query = "UPDATE TIENDA SET NOMBRE='$NOMBRE', MUNICIPIO='$MUNICIPIO' WHERE ID_TIENDA='$ID_TIENDA'";
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

$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');

	if(isset($_GET['accion']))
		{
			if($_GET['accion'] == "editar")
			{
				$query = "SELECT * FROM TIENDA WHERE ID_TIENDA='$_GET[ID_TIENDA]'";
				$resultado = oci_parse($conexion, $query);
			    oci_execute($resultado);
				$datos = oci_fetch_assoc($resultado);			
				
?>
	<html>
			<head>
				<link rel="stylesheet" type="text/css" href="style.css">
				<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
				<title>Editar PHP y ORACLE.</title>
				<meta charset="utf-8" />
			</head> 
						
			<header>
				<div class="formulario" style="text-align: center;"> Formulario 2.</div>
				<p>Modifique los datos requeridos.</p>
			</header>
				
			<form action='modificar.php?accion=editar' method= 'post' >
				<div class="contenedor">
					<label class="centrar">Id Tienda: </label>
					<input type='text' readonly='readonly' name='ID_TIENDA' class="text" value="<?= $datos['ID_TIENDA']; ?>" ><br><br/>
					
					<label class="centrar">Nombre(s): </label>
					<input type='text' name='NOMBRE' class="text" value="<?= $datos['NOMBRE']; ?>" ><br><br/>
											
					<label class="centrar">Municipio: </label>
					<select name="MUNICIPIO" id="esc_municipio" class="lista">
                    <option value="">-SELECCIONE UNA OPCION-</option>
                    <option value="Tuxtla Gutierrez"<?=$datos['MUNICIPIO'] == "Tuxtla Gutierrez"? "selected": "" ?>> Tuxtla Gutierrez</option>
                    <option value="San cristobal"<?=$datos['MUNICIPIO'] == "San cristobal"? "selected": "" ?>> San cristobal</option>
                    <option value="Arriaga"<?=$datos['MUNICIPIO'] == "Arriaga"? "selected": "" ?>> Arriaga</option>
                    <option value="Ocosingo"<?=$datos['MUNICIPIO'] == "Ocosingo"? "selected": "" ?>>Ocosingo</option>
                    <option value="Cintalapa"<?=$datos['MUNICIPIO'] == "Cintalapa"? "selected": "" ?>>Cintalapa</option>
                </select><br/><br/>
		<?php
				extract($_POST);
                $conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
                $queryInsert = "SELECT MUNICIPIO FROM TIENDA WHERE ID_TIENDA = ID_TIENDA";
				$Municipio = oci_parse($conexion, $queryInsert);
				oci_execute($Municipio);           
		?>				
					<input type='submit' name='submit' class="btnsubmit" value='Enviar' />
				</div>
			</form>
		</html>
<?php
				if(isset($_POST['submit']))
				{
					$ID_TIENDA = $_POST['ID_TIENDA'];
					$NOMBRE = $_POST['NOMBRE'];
					$MUNICIPIO = $_POST['MUNICIPIO'];
						
						if(actualizar($ID_TIENDA, $NOMBRE, $MUNICIPIO) == true)
						{
							echo"actualizo";
							header ("Location: insert.php");						 
						}
						else
						{
							echo "no actualizo";
						}
				}
			}
		}
?>
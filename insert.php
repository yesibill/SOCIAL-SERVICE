<?php 
	 include("f_agregar.php");
	 include("funcion_eliminar.php");
	 include("f_visualizar.php");
	 include("modificar.php");
	
	 $conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
	
	if(isset($_GET['accion']))
	{
		if($_GET['accion'] == "eliminar")
		{
			$ID_TIENDA = $_GET['ID_TIENDA'];
							
			if(eliminar($ID_TIENDA)==true)
			{
				echo"elimino";
			}	 
			else 
			{
				echo "no elimino";
			}
		}
			
			
		if($_GET['accion'] == "editar")
		{
			// $query = "SELECT * FROM TIENDA WHERE ID_TIENDA='$_GET[ID_TIENDA]'";
			// $resultado = oci_parse($conexion, $query);
			// oci_execute($resultado);
			// $datos = oci_fetch_assoc($resultado); 
			
			$ID_TIENDA = $_POST['ID_TIENDA'];
			$NOMBRE = $_POST['NOMBRE'];
			$MUNICIPIO = $_POST['MUNICIPIO'];
					
			if(actualizar($ID_TIENDA, $NOMBRE, $MUNICIPIO) == true)
			{
				echo"actualizo";	 
			}	 
			else 
			{
				echo "no actualizo";
			} 
		}	
	}
	
	if(isset($_POST['submit']))
	{
		$nombre = $_POST['nombre'];
		$municipio = $_POST['municipio']; /*iran las variables con post por que no estan definidas en este archivo si las estamos llamando de otro archivo*/
		
		if(agregar($nombre,$municipio)==true)
		{
			echo"agrego";
		}	 
		else
		{
			echo "no agrego";
		}
	}
		
	if(visualizar()==true)
	{
		echo"si";	 
	}
		 
	else
	{
		echo "no";
	}	
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
	<title>Ejemplo PHP y ORACLE.</title>
	<meta charset="utf-8" />
	
</head> 
<body> 
    <header>
    <div class="formulario" style="text-align: center;">Formulario 1.</div>
       <p>Favor de llenar los datos requeridos.</p>
    </header>

	<form action="insert.php" method="post">
		<div class="contenedor">
		<label class="centrar">Nombre(s): </label>
		<input type="text" required="" class="text" name="nombre" /> <br><br>

		<label class="centrar">Municipio: </label>
		<select name="municipio" class="lista">
                    <option value="">-SELECCIONE UNA OPCION-</option>
                    <option value="Tuxtla Gutierrez">Tuxtla Gutierrez</option>
                    <option value="San cristobal">San cristobal</option>
                    <option value="Arriaga">Arriaga</option>
                    <option value="Ocosingo">Ocosingo</option>
                    <option value="Cintalapa">Cintalapa</option>
                </select><br/><br/>
		<?php
				if ($municipio =! "")
				{
				extract($_POST);
                $conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
                $queryInsert = "INSERT INTO TIENDA (MUNICIPIO) VALUES('$municipio')";
				$Municipio = oci_parse($conexion, $queryInsert);
				/*oci_execute($municipio);*/
				}
		?>
			
		<input type="submit" name="submit" class="btnsubmit" value="Enviar"/>
		
		</div>
	</form>	<br><br><br><br>
	<br/>
	<? ?> <br/><br/><br><br>
</body>
</html>
<?php
		
		$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
		$query = "SELECT * FROM ALUMNO WHERE MATRICULA ='A150000'";
		$resultado = oci_parse($conexion, $query);
		oci_execute($resultado);
		$datos = oci_fetch_assoc($resultado);

		function modificar($matricula, $nombre, $apellido, $genero, $ecivil, $correo, $semestre, $grupo, $municipio, $facultad){
			$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');

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

			$query = "UPDATE ALUMNO SET NOMBRE='$nombre', APELLIDO='$apellido', GENERO='$genero', ECIVIL='$ecivil', CORREO='$correo', SEMESTRE='$semestre', GRUPO='$grupo', MUNICIPIO='$municipio', CODIGO_FA='$facultad' WHERE MATRICULA='A15000'";
			$editar = oci_parse($conexion, $query);
			
			if(oci_execute($editar)){
				return true;
			}
			else{
				return false;
			}  	
		}
		
		if(isset($_POST['submit'])){
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
			
			if (modificar($matricula, $nombre, $apellido, $genero, $ecivil, $correo, $semestre, $grupo, $municipio, $facultad) == true){
				echo"siiii";
			}
			else{echo"noooo";}
		}
?>
		
	<!--ventana modal para editar la informacion de los registros-->
	<form action='editar.php' method= 'post' >
		<div class ="modal" id="id_modaleditar">
			<div class ="contenidomodal">
				<a class="equis" id="id_cerrar" >&times;</a>
				<h1>Editar</h1>
					
				<label class ="label">Matricula: </label>
				<input type="text" name ="matricula" class="text" id = "id_matricula" value="<?= $datos['MATRICULA']; ?>" /><br><br>
					
				<label class="label">Nombre: </label>
				<input type="text" name ="nombre" class="text" id = "id_nombre" value="<?= $datos['NOMBRE']; ?>" /><br><br>
					
				<label class="label">Apellido: </label>
				<input type="text" name ="apellido" class="text" id = "id_apellido" value="<?= $datos['APELLIDO']; ?>" /><br><br>
					
				<label class="label">Genero: </label>
				<input name="genero" type="checkbox" id ="id_check1" value="F" <?=(isset($datos['GENERO'])&&$datos['GENERO']=="F")?"checked": "";?>  />Femenino
				<input name="genero" type="checkbox" id ="id_check2" value="M" <?=(isset($datos['GENERO'])&&$datos['GENERO']=="M")?"checked": "";?>  />Masculino<br><br>
					
				<label class="label">Estado Civil: </label>
				<select id="id_ecivil" class="lista">
					<option type="text" name="ecivil" value="">-Seleccione una opción-</option>
					<option type="text" name="ecivil" value="soltero" <?=(isset($datos['ECIVIL'])&&$datos['ECIVIL']== "soltero")?"selected": "";?> >Soltero</option>
					<option type="text" name="ecivil" value="casado"  <?=(isset($datos['ECIVIL'])&&$datos['ECIVIL']== "casado")?"selected": ""; ?> >Casado</option>
				</select><br><br>
					
				<label class="label">Correo: </label>
				<input type="email" name ="correo" class="text" id = "id_correo" value="<?= $datos['CORREO']; ?>" /><br></br>
					
				<label class="label">Semestre: </label>
				<select id="id_semestre" class="lista">
					<option type="text" name="semestre" value="">-Seleccione un semestre-</option>
					<option type="text" name="semestre" value="1" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="1")?"selected": "";?> >1°</option>
					<option type="text" name="semestre" value="2" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="2")?"selected": "";?> >2°</option>
					<option type="text" name="semestre" value="3" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="3")?"selected": "";?> >3°</option>
					<option type="text" name="semestre" value="4" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="4")?"selected": "";?> >4°</option>
					<option type="text" name="semestre" value="5" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="5")?"selected": "";?> >5°</option>
					<option type="text" name="semestre" value="6" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="6")?"selected": "";?> >6°</option>
					<option type="text" name="semestre" value="7" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="7")?"selected": "";?> >7°</option>
					<option type="text" name="semestre" value="8" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="8")?"selected": "";?> >8°</option>
					<option type="text" name="semestre" value="9" <?=(isset($datos['SEMESTRE'])&&$datos['SEMESTRE']=="9")?"selected": "";?> >9°</option>	
				</select><br></br>
					
				<label class="label">Grupo: </label>
				<select id="id_grupo" class="lista">
					<option type="text" name="grupo" value="">-Seleccione un grupo-</option>
					<option type="text" name="grupo" value="A" <?=$datos['GRUPO'] == "A"? "selected": "" ?> >A</option>
					<option type="text" name="grupo" value="B" <?=$datos['GRUPO'] == "B"? "selected": "" ?> >B</option>
					<option type="text" name="grupo" value="C" <?=$datos['GRUPO'] == "C"? "selected": "" ?> >C</option>
				</select><br><br>
					
				<label class="label">Municipio: </label>
				<select id="id_municipio" class="lista">
					<option type="text" name="municipio" value="">-Seleccione un municipio-</option>
					<option type="text" name="municipio" value="tuxtla gutierrez" <?=$datos['MUNICIPIO'] == "tuxtla gutierrez"? "selected": "" ?> >Tuxtla Gutierrez</option>
					<option type="text" name="municipio" value="san cristobal" <?=$datos['MUNICIPIO'] == "san cristobal"? "selected": "" ?> >San Cristobal</option>
					<option type="text" name="municipio" value="tapachula" <?=$datos['MUNICIPIO'] == "tapachula"? "selected": "" ?> >Tapachula</option>
					<option type="text" name="municipio" value="comitan" <?=$datos['MUNICIPIO'] == "comitan"? "selected": "" ?> >Comitán</option>
				</select><br><br>
					
				<label class="label">Facultad: </label>
				<select id="id_combo" class="lista">
					<option type="text" name="facultad" value="">-Seleccione una Facultad-</option>
					<?php
						$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
						$query = "SELECT * FROM FACULTAD";
						$resultado = oci_parse($conexion, $query);
						if(oci_execute($resultado)) {
							while($listbox = oci_fetch_assoc($resultado)){
								if($listbox['CODIGO_FA'] == $datos['CODIGO_FA'] ){
									$si = "selected";
								}
								else{
									$si = "";
								}
								echo "<option value='$listbox[CODIGO_FA]' class='lista' $si >$listbox[NOMBRE_FA]</option>";
							}
						}
						 ?>
				</select><br><br/><br/>
					
				<input name="submit" value="Aceptar" class="btnsubmit" type="submit"/><br></br>
				<input name="botoncancelar" value="Cancelar" class="btnsubmit" type="submit"/>	
			</div>
		</div>	
</form>		

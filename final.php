<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main_index.css">
		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<meta charset="utf-8"/>
		<title>Ejemplo Final uno.</title>
		<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script>
			//funcion para ver la tabla
			$(document).ready(function(){
				$('#tabla').DataTable();
			});
			
			//funcion para agregar datos
			function datos(){
				var matricula = $("#id_matricula").val();
				var nombre = $("#id_nombre").val();
				var apellido = $("#id_apellido").val();
				var genero1 = $(".check").val();
				var genero2 = $(".check").val();
				var ecivil = $("#id_ecivil").val();
				var correo = $("#id_correo").val();
				var semestre = $("#id_semestre").val();
				var grupo = $("#id_grupo").val();
				var municipio = $("#id_municipio").val();
				var codigo = $("#id_combo").val();
				 
				var request = $.ajax({ //el metodo $.ajax  es configurado a través de un objeto, el cual contiene todas las instrucciones que necesita jQuery para completar la petición. es un 
				  url: "agregar.php",
				  method: "POST",
				  data: { matricula : matricula, nombre : nombre, apellido: apellido, genero : genero1, genero : genero2, ecivil : ecivil,correo : correo,semestre : semestre,grupo : grupo,municipio : municipio,facultad : codigo },
				  dataType: "json"
				});
				 
				request.done(function( verdadero ) {
				  if(verdadero.retorno == 1){
					alert(verdadero.mensaje);
				  } 
				});
			}
			
			// Funcion para abrir la ventana modal y eliminar un regristro
			function abrir(matricula){
				var boton = document.getElementById("id_boton");
				var modal = document.getElementById("id_modal");
				modal.style.display = "block";
				
				var aceptar = document.getElementById("id_aceptar");
				
				aceptar.onclick = function(){
					var request = $.ajax({
					url: "eliminar.php",
					method: "POST",
					data: { matricula : matricula},
					dataType: "json"
				});
					 
				request.done(function( verdadero ){
					if(verdadero.retorno == 1){
						modal.style.display = "none";
					} 
				});
				}
			}
			
			//funcion para cerrar la ventana modal			
			function cerrar(){
				var equis = document.getElementById("id_cerrar");
				var modal = document.getElementById("id_modal");
				var modale = document.getElementById("id_eliminarmod");
				
				modal.style.display = "none";
				modale.style.display = "none";
			}
			
			// function abrirEdit(matricula){
				// var boton = document.getElementById("id_boton");
				// var modal = document.getElementById("id_eliminarmod");
				// modal.style.display = "block";
			// }
			
			//funcion para editar un registro
			// function abrirEdit(matricula){
				// var modal = document.getElementById("id_modaleditar");
				// modal.style.display = "block";
				
				// var aceptar = document.getElementById("id_aceptar");
				
				// aceptar.onclick = function(){
					// var request = $.ajax({
					// url: "editar.php",
					// method: "POST",
					// data: { matricula : matricula},
					// dataType: "json"
				// });
					 
				// request.done(function( verdadero ){
					// if(verdadero.retorno == 1){
						// modal.style.display = "none";
					// } 
				// });
				// }
			// }
			
		</script>	
	</head>
	
		<body >
			<header id="h1" ><h1 id="h1">Ejemplo.</h1></header>
			
			<!--ventana modal para confirmar la eliminacion-->
			<div class ="modal" id="id_modal">
				<div class ="contenido">
					<a class="equis" id="id_cerrar" onclick="cerrar()">&times;</a>
					<p>Deseas eliminar el archivo seleccionado?...</p>
					<input type="submit" name="submit" class="btnsubmit" id="id_aceptar" value="Aceptar"  /><br><br>
					<input type="submit" name="submit1" class="btnsubmit" value="Cancelar" onclick="cerrar()" />
				</div>
			</div>
			
			<!--ventana modal notificando que se agrego un archivo correctamente-->
			<div class ="modal" id="id_modaldos">
				<div class ="contenido">
					<a class="equis" id="id_cerrar" onclick="cerrar()">&times;</a>
					<p>Registro agregado satisfactoriamente...</p>
					<input type="submit" name="submit" class="btnsubmit" value="Aceptar" onclick="cerrar()" />
				</div>
			</div>
			
			<!--formulario donde se llenaran los datos-->
				<div class="contenedor" id = "div" >
				<h1>DATOS PERSONALES: ALUMNOS.</h1><br/>
					<form method ="post">
					
					<label class ="label">Matricula: </label>
					<input type="text" name ="matricula" class="text" id = "id_matricula"/><br/><br/><br/>
					
					<label class="label">Nombre: </label>
					<input type="text" name ="nombre" class="text" id = "id_nombre"/><br/><br/><br/>
					
					<label class="label">Apellido: </label>
					<input type="text" name ="apellido" class="text" id = "id_apellido"/><br/><br/><br/>
					
					<label class="label">Genero: </label>
					<input name="genero" type="checkbox" class ="check" value="F"/>Femenino
					<input name="genero" type="checkbox" class ="check" value="M"/>Masculino<br></br><br/>
					
					<label class="label">Estado Civil: </label>
					<select id="id_ecivil" class="lista">
						<option type="text" name="ecivil" value="">-Seleccione una opción-</option>
						<option type="text" name="ecivil" value="soltero">Soltero</option>
						<option type="text" name="ecivil" value="casado">Casado</option>
					</select><br><br/><br/>
					
					<label class="label">Correo: </label>
					<input type="email" name ="correo" class="text" id = "id_correo"/><br/><br/><br/>
					
					<label class="label">Semestre: </label>
					<select id="id_semestre" class="lista">
						<option type="text" name="semestre" value="">-Seleccione un semestre-</option>
						<option type="text" name="semestre" value="1">1°</option>
						<option type="text" name="semestre" value="2">2°</option>
						<option type="text" name="semestre" value="3">3°</option>
						<option type="text" name="semestre" value="4">4°</option>
						<option type="text" name="semestre" value="5">5°</option>
						<option type="text" name="semestre" value="6">6°</option>
						<option type="text" name="semestre" value="7">7°</option>
						<option type="text" name="semestre" value="8">8°</option>
						<option type="text" name="semestre" value="9">9°</option>	
					</select><br><br/><br/>
					
					<label class="label">Grupo: </label>
					<select id="id_grupo" class="lista">
						<option type="text" name="grupo" value="">-Seleccione un grupo-</option>
						<option type="text" name="grupo" value="A">A</option>
						<option type="text" name="grupo" value="B">B</option>
						<option type="text" name="grupo" value="C">C</option>
					</select><br><br/><br/>
					
					<label class="label">Municipio: </label>
					<select id="id_municipio" class="lista">
						<option type="text" name="municipio" value="">-Seleccione un municipio-</option>
						<option type="text" name="municipio" value="tuxtla gutierrez">Tuxtla Gutierrez</option>
						<option type="text" name="municipio" value="san cristobal">San Cristobal</option>
						<option type="text" name="municipio" value="tapachula">Tapachula</option>
						<option type="text" name="municipio" value="comitan">Comitán</option>
					</select><br><br/><br/>
					
					<label class="label">Facultad: </label>
					<select id="id_combo" class="lista">
						<option type="text" name="facultad" value="">-Seleccione una Facultad-</option>
						<?php
								$conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
								$query = "SELECT * FROM FACULTAD";
								$resultado = oci_parse($conexion, $query);
								if(oci_execute($resultado)) {
									while($listbox = oci_fetch_assoc($resultado)){ 
										echo "<option value='$listbox[CODIGO_FA]' class='lista'>$listbox[NOMBRE_FA]</option>";
									}
								}
						?>
					</select><br><br/><br/>
					
					<input type="submit" name="submit" class="btnsubmit" value="Agregar" onclick="datos()"/>
					
					</form> 
				</div> 
				
			<div class="menu">
			  <a href="#">Menú</a>
			  <a href="#">Opción 1</a>
			  <a href="#">Opción 2</a>
			  <a href="#">Opción 3</a>
			  <a href="#">Opción 4</a>
			</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	
			<?php
				include("vertabla.php");
					ver();		
			?>
		<br/><br/><br/>
    <footer><h1>Footer.</h1></footer> 	
			
		</body>
</html>
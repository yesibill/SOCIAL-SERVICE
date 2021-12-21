<?php


echo "nombre:".$_POST['nombre'];echo"<br>";
echo "apellido:".$_POST['apellido'];


?> 

<!DOCTYPE html>
<html>
<body>
	<form  method="post" onsubmit="return validar()" action="nuevotema.php">
	   
		<label>Nombre:</label>
		<input type="text" name="nombre" id="id_nombre"><br></br>
		
		<label>Apellido:</label>
		<input type="text" name="apellido" id="id_apellido"><br></br>
		
		<input name="peliculas" type="checkbox"/>peliculas<br>
		<input name="libros" type="checkbox"/>libros<br></br>
				
		<select id="id_combo">
			<option type="text" name="nivel" value="">-Seleccione una opcion-</option>
			<option type="text" name="nivel" value="administrador">Administrador</option>
			<option type="text" name="nivel" value="Usuario">Usuario</option>
		</select><br><br/>
	
	<input type="submit" value="Enviar" onclick="validar()">
	</form>
 </body>
 </html>
 
 <script>
	//var nombre = document.getElementById("id_nombre").value;
	 // if(input == null || input.length == 0 || input == " "){
		 
		//----------------------------------------
		 
		// if(frm.id_nombre.value == " " && frm.id_apellido.value == " "){
			// alert ("faltan datos");
			// return false;
		// }
		// else{
			// alert ("datos guardados");
			// return true;
		// }
		
		//----------------------------------------
		
		// var texto = document.getElementById('id_nombre');
	   // var texto1 = document.getElementById('id_apellido');
		
			 // if(texto.value == "" && texto1.value == ""){
					
					 // alert("ingrese los campos requeridos");
				
				 // return false;
			 // }
			
			 // else{
				 // alert("datos completados");
				// return true;
		    // }
			
		//---------------------------------------
		
		// var texto = document.getElementById('id_nombre');
	   // var texto1 = document.getElementById('id_apellido');
		
			 // if(texto.value == "" && texto1.value == ""){
					
					 // alert("ingrese los campos requeridos");
				
				 // return false;
			 // }
			
			 // else{
				 // alert("datos completados");
				// return true;
		    // }			
			
	function validar(){
			
		var texto = document.getElementsByTagName("input");
		 
		for(var i = 0; i < texto.length; i++){
			
			if(texto[i].type == "text"){
				if (texto[i].value == "" || texto[i].value == null){
					alert("faltan datos1");
					return false;
				}
			}
			
			if(texto[i].type == "checkbox"){
				if (texto[i].checked == false){
					alert("faltan datos2");
					return false;
				}
			}
		}
		
		var com = document.getElementById("id_combo").selectedIndex;
			if(com == null || com == 0){
				alert("faltan datos3");
				return false;
			}
			else{
				alert("datos guardados");
				return true;
			}
	}

 </script>
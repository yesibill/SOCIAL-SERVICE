<!DOCTYPE html>
<html>
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>
			<script>
			function nueva(){
				$("#id_nombre").val();
			}
			
			function datos(){
				var id = $("#id").val();
				var nombre = $("#id_nombre").val();
				var apellido = $("#id_apellido").val();
				var genero = $(".check").val();
				
				var combo = $("#id_combo").val();
				alert (id+ nombre+ apellido+ genero+ combo);
				 
				var request = $.ajax({ //el metodo $.ajax  es configurado a través de un objeto, el cual contiene todas las instrucciones que necesita jQuery para completar la petición. es un 
				  url: "datosjquery.php",
				  method: "POST",
				  data: { codigo : id, llamado : nombre, lastname : apellido, gene : genero, estado : combo },
				  dataType: "json"
				});
				 
				request.done(function( verdadero ) {
				  //alert( verdadero );
				  if(verdadero.retorno == 1){
					  alert(verdadero.mensaje+"resultado");
				  } 
				});
				 
				
			}
		</script>
	</head>

<body onload ="nueva()">
	<form  method="post">
	    <label>Id:</label>
		<input type="text" name="id" id="id"><br></br>
		
		<label>Nombre:</label>
		<input type="text" name="nombre" id="id_nombre"><br></br>
		
		<label>Apellido:</label>
		<input type="text" name="apellido" id="id_apellido"><br></br>
		
		<input name="genero" type="checkbox" class ="check" value="F"/>Femenino<br>
		<input name="genero" type="checkbox" class ="check" value ="M"/>Masculino<br></br>
				
		<select id="id_combo">
			<option type="text" name="ecivil" value="">-Seleccione una opcion-</option>
			<option type="text" name="ecivil" value="soltero">Soltero</option>
			<option type="text" name="ecivil" value="casado">Casado</option>
		</select><br><br/>
	
	<input type="button" value="Enviar" onclick="datos()">
	
	</form>
	
 </body>
 </html>

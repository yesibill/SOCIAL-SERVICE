<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main_index.css">
		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<script src="js/java.js"></script>
		<meta charset="utf-8"/>
		<script>
			
		</script>
		<title>Ejemplo HTML.</title>
	</head>
		<body>
			<div class ="modal" id="id_modal">
				<div class ="contenido">
					<a class="equis" id="id_cerrar" onclick="cerrar()">&times;</a>
					<p>hola! esto es una ventana modal :)</p>
				</div>
			</div>
			
			<header><h1 id="h1">Ejemplo.</h1></header>
				<div class="contenedor" id = "div">
					<form action="archivo.php" method ="get">
					<label class ="label">Variable 1: </label>
					<input type="text" name ="variable1" class="text" id="id_uno"/><br/><br/><br/>
					<label class="label">Variable 2: </label>
					<input type="text" name ="variable2" class="text" id="id_dos" onblur="suma()"/><br/><br/><br/>
					<label class="label">Resultado: </label>
					<input type="text" name ="resultado" class="text" id="id_resultado" onfocus="suma()"/><br/><br/><br/>
					<input name="boton" value="Calcular" class="btnsubmit" type="button" id="id_boton" onclick="abrir()"/>
					</form>
				</div>	
				
				<div class="menu">
				  <a href="#">Menú</a>
				  <a href="#">Opción 1</a>
				  <a href="#">Opción 2</a>
				  <a href="#">Opción 3</a>
				  <a href="#">Opción 4</a>
				</div>
			
		<footer><h1>Footer.</h1></footer>
			
				<script>
					
					function abrir(){
						var boton = document.getElementById("id_boton");
						var modal = document.getElementById("id_modal");
						modal.style.display = "block";
					}
					
					function cerrar(){
						var equis = document.getElementById("id_cerrar");
						var modal = document.getElementById("id_modal");
						modal.style.display = "none";
					}
				</script>
				
		</body>
</html>
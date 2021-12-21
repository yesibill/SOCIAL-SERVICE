<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main_index.css">
		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<meta charset="utf-8"/>
		<title>Ejemplo HTML.</title>
	</head>
		<body>
		
			<header><h1>Ejemplo.</h1></header>
			
				<div class="contenedor">
				<h1>Archivos.</h1><br/>
					<form action="index.php" method ="get">
					<label>Variable 1: </label>
					<input type="text" name ="variable1" class="text"/><br/><br/><br/>
					<label>Variable 2: </label>
					<input type="text" name ="variable2" class="text"/><br/><br/><br/>
					<input type="submit" name="submit" class="btnsubmit" value="Buscar"/>
					</form>
					
					<?php 
						if(isset($_GET['variable1']) != "" ){
							
						$variable1 = $_GET['variable1'];
                        $variable2 = $_GET['variable2'];
						$variable3 = $variable1.$variable2.".php";
						
						if(chdir("nuevo")){
							if (file_exists($variable3)){
								include("$variable3");
							}
							
							elseif(file_exists($variable1)){
								include("$variable1");
							}
							
							elseif(chdir("../carpeta")){
								if(file_exists($variable3)){
									include("$variable3");
								}
								elseif (file_exists($variable1)){
									include("$variable1");
								}
								else{
									echo"No existe este archivo";
								}	
							}	
						}

						else{
							echo "No existe este archivo";
						}
						
						}
					?>
				</div>

			<div class="menu">
			  <a href="?variable1=uno&variable2">Menú</a>
			  <a href="?variable1=hola_&variable2=mundo">hola_mundo.php</a>
			  <a href="?variable1=hola&variable2">hola.php</a>
			  <a href="?variable1=ejemplo&variable2">Opción 3</a>
			  <a href="?variable1=archivo_&variable2=ejemplo">Opción 4</a>
			</div>
		
    <footer><h1>Footer.</h1></footer> 		
		</body>
</html>
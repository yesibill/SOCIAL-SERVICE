<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../main.css">
		<link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
		<script src="js/java.js"></script>
		<meta charset="utf-8"/>
		<script>
			function java (){
				var variable = 5;
				var variable2 = 10;
				alert (variable*variable2);
			}
			// java();
		</script>
		
		<title>Ejemplo HTML.</title>
	</head>
		<body>
		
			<header id="h1" onclick="color()"><h1 id="h1">Ejemplo.</h1></header>
		
				<div class="contenedor" id = "div" onclick="color()">
				<h1 class="text">Archivos.</h1><br/>
					<form action="archivo.php" method ="get">
					<label class ="label">Variable 1: </label>
					<input type="text" name ="variable1" class="text" id = "id_uno"/><br/><br/><br/>
					<label class="label">Variable 2: </label>
					<input type="text" name ="variable2" class="text" id = "id_dos" onblur="suma()"/><br/><br/><br/>
					<label class="label">Resultado: </label>
					<input type="text" name ="resultado" class="text" id = "id_resultado" onfocus = "suma()"/><br/><br/><br/>
					<input type="submit" name="submit" class="btnsubmit" value="Buscar"/>
					<input name="boton" value="boton" type="button" id = "id_boton" onclick ="botonclick()"/>
					</form>
				</div>
				
				<div class="contenedor">1° div
				<div bgcolor="#800080" style ="height:350px; width: 20%;">
				<div></div>
				<div></div>
				</div>
				<div> </div>
				<div> </div>
				<div> </div>
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
					//document.getElementById("h1").innerHTML="Javascript";
					
					//alert(document.getElementById("label").innerHTML);
					
					 // var cadena ="ejemplo";
					 // var cadena1="concatenar";
					
					 // document.getElementById("h1").innerHTML=cadena+cadena1;
					
					//alert(document.getElementById("h1").nodeName);
					
					// var almacenar = document.getElementsByClassName("text");
					//alert(almacenar.length);
					// for(var i=0; i<almacenar.length; i++){
						// alert(almacenar[i].nodeName); //nombre de etiqueta
						
					//}
					// function botonclick(){
						 // alert(document.getElementById("id_uno").value + " " + document.getElementById("id_dos").value);
					// }
					
			// function suma(){
				// var numero1 = document.getElementById("id_uno").value;
				// var numero2 = document.getElementById("id_dos").value;	
					// if (numero1 != "" && numero2 != ""){	
						// document.getElementById("id_resultado").value = parseInt(numero1) + parseInt(numero2);	
					// }
					// else {
						// alert("Llenar los dos campos de texto");
					// }
			// }
			
				function color(){
					document.getElementById("div").style.backgroundColor ="#48C9B0";
					document.getElementById("h1").style.backgroundColor ="#F1C40F";
				}
				
				</script>
				
				
		</body>
</html>
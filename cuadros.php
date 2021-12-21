<?php
		ob_start();
		
		?>
<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style1.css">
			<title>CUADROS</title>
			<meta charset="utf-8" />
		</head>
	
	<body>
		<div class="formulario"> 

		</div>
		<br/><br/><br/>
		<div class="formulario1">

		</div>
		
		<?php
		ob_end_clean();
		
		ob_start();
		
		echo"hola";
		echo "php";
		$variable= ob_get_contents();
		
		ob_end_clean();
		
		
		echo"<html>
		<head>
			<link rel='stylesheet' type='text/css' href='style1.css'>
			<title>CUADROS</title>
			<meta charset='utf-8' />
		</head>
	
	<body>
		<div class='formulario'> 

		</div>
		<br/><br/><br/>
		<div class='formulario2'>

		</div>
		
		$variable
		</body>
	
</html>
		";
		exit();
		
		?>

	</body>
	
</html>
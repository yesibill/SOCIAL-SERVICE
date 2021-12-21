<?php
if(isset($_GET['accion'])){
	if(isset($_POST['submit'])){
		echo $_POST['nombre'];
		echo $_POST['apellido'];
		echo $_GET['cantidad'];
		echo $_GET['accion'];
	}
}
?>

<form method="post" onsubmit="return funcion()"  action="ejemplo.php?accion=10&cantidad=cat">
	<input type='text' name='nombre' ><br><br/>
	<input type='text' name='apellido' ><br><br/>
	<input type='submit' name='submit'  value='Enviar' />
</form>
<?php
		$arreglo = array ('Nombre'=> 'Daniela',
						  'Apellido' => 'Leon',
						  'Correo' => 'Dleon@unach.mx',
						  'Telefono' => '9612345678', 
						  'Edad' => '21');
		
		//print_r ($arreglo);
		echo json_encode ($arreglo);
?>
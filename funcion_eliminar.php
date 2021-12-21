<?php
   function eliminar($ID_TIENDA){
	   
	  $conexion = oci_connect('daniela', 'servicio', '10.30.15.39/xe','AL32UTF8');
	   $ID_TIENDA=$_GET['ID_TIENDA'];
	   
		$query = "DELETE FROM TIENDA WHERE ID_TIENDA='$_GET[ID_TIENDA]'";
				$eliminar = oci_parse($conexion,$query);
				
   
            if(oci_execute($eliminar)) {
			return true;
		}
		else {
		return false;
		}
   }
?>
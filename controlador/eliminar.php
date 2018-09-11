<?php
	include_once('../modelo/modelo/modelo.php');
	include_once('../modelo/db/db.php');

	$id = $_GET['data'];
	
	$modelo = new metodos();
	$eliminar = $modelo->eliminar($id);

	echo "<script>
	alert('Registro eliminado');
	window.location = '../vistas/usuarios.php';
			</script>";
?>
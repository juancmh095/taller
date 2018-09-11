<?php
	include_once('../modelo/modelo/modelo.php');
	include_once('../modelo/db/db.php');

	///variables
	echo $matricula    = $_POST['matricula'];
	echo $nombre       = $_POST['nombre'];
	echo $apellidos    = $_POST['apellidos'];
	echo $email        = $_POST['email'];
	echo $telefono     = $_POST['telefono'];
	echo $edad         = $_POST['edad'];
	echo $sexo         = $_POST['sexo'];


	///modelo
	$modelo = new metodos();
	$insertar = $modelo->actualizar($matricula, $nombre, $apellidos, $email, $telefono, $edad, $sexo);

	echo "<script>
	alert('Registro Actualizado correctamente');
	window.location = '../vistas/usuarios.php';
	</script>"

?>
<?php
include_once('../modelo/modelo/modelo.php');
	include_once('../modelo/db/db.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Taller MVC</title>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
<style>
	#contenedor{
		margin-top: 100px;
		width: 80%;
		border-radius: 10px;
		text-align: center;
	}
	#cabecera{
		text-align: center;
	}
	
</style>
</head>

<?php
	$modelo = new metodos();
	$cargar = $modelo->cargar();
	if($cargar != null){
		foreach($cargar as $usuario){
			
		}
	}
	?>

<body>
	<div class="container" align="center" id="contenedor">
	<a href="registro.php" class="">Regresar</a>
		<table class="table table-bordered table-responsive table-hover table-striped table-condensed">
			<thead id="cabecera">
				<tr align="center">
					<th>Matricula</th>
					<th>Nombre</th>
					<th>apellido</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<!--cargar datos de base de datos-->
			<?php
					$modelo = new metodos();
					$cargar = $modelo->cargar();
					if($cargar != null){
						foreach($cargar as $usuario){
		    ?>
		    
				<tr>
					<td><?php echo $usuario['0']; ?></td>
					<td><?php echo $usuario['1']; ?></td>
					<td><?php echo $usuario['2']; ?></td>
					<td><?php echo $usuario['3']; ?></td>
					<td><?php echo $usuario['4']; ?></td>
					<td><?php echo $usuario['5']; ?></td>
					<td><?php echo $usuario['6']; ?></td>
					<td><a href="registro.php?data=<?php echo $usuario['0']; ?>" class="btn btn-info">Actualizar</a></td>
					<td><a href="../controlador/eliminar.php?data=<?php echo $usuario['0']; ?>" class="btn btn-danger">Eliminar</a></td>
				</tr>
			<?php
						}
					}
			?>
			</tbody>
		</table>
	</div>

<body>
</body>
</html>
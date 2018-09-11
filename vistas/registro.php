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
		width: 50%;
		border-radius: 10px;
	}
	
</style>
</head>

<body>


<div class="container" align="center" id="contenedor">
<h3>REGISTRO DE USUARIO</h3>
<hr>
<?php
	if(isset($_GET['data'])){
		$matricula = $_GET['data'];
	}else{
		$matricula = 0;
	}
	
	$modelo = new metodos();
	$cargar = $modelo->cargar_matricula($matricula);
	if($cargar != null){
		foreach($cargar as $usuario){
	?>
	<!---- inicio formulario-->

	<div class="row">
		<div class="col-lg-12">
			<form action="../controlador/actualizar.php" method="post">
				 <div class="row">
					 <div class="col-lg-2">
						<label>Matricula</label>
					 </div>
					 <div class="col-lg-4">
						<input class="form-control" type="text" placeholder="Matricula" name="matricula" value="<?php echo $usuario['0']; ?>">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Nombre</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $usuario['1']; ?>">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Apellidos</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Apellidos" name="apellidos" value="<?php echo $usuario['2']; ?>">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Correo</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo $usuario['3']; ?>">
					 </div>
				 </div>
				 <br>
				  <div class="row">
					 <div class="col-lg-2">
						<label>Telefono</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Telefono" name="telefono" value="<?php echo $usuario['4']; ?>">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Edad</label>
					 </div>
					 <div class="col-lg-4">
						<input class="form-control" type="number" placeholder="Edad" name="edad" value="<?php echo $usuario['5']; ?>">
					 </div>
					 <div class="col-lg-2">
						<label>Sexo</label>
					 </div>
					 <div class="col-lg-4">
						<select name="sexo" class="form-control">
						<?php
							if($usuario['6']=="M"){
						?>
							<option value="M">M</option>
							<option value="F">F</option>
						<?php
							}else{
								if($usuario['6']=="F"){
						?>
							<option value="F">F</option>
							<option value="M">M</option>
						<?php
								}
							}
						?>
							
						</select>
					 </div>
				 </div>
				 <br>
				 <hr>
				 <div class="row">
				 	<div class="col-lg-3">
				 		<button class="btn btn-lg btn-warning" type="submit">ACTUALIZAR</button>
				 	</div>
				 	<div class="col-lg-3">
				 		<a href="usuarios.php" class="btn btn-lg btn-default">VISUALIZAR</a>
				 	</div>
				 </div>
			</form>
		</div>
	</div>
	<!---- inicio formulario-->
	<?php
		}
	}else{
?>

<!---- inicio formulario-->

	<div class="row">
		<div class="col-lg-12">
			<form action="../controlador/insertar.php" method="post">
				 <div class="row">
					 <div class="col-lg-2">
						<label>Matricula</label>
					 </div>
					 <div class="col-lg-4">
						<input class="form-control" type="text" placeholder="Matricula" name="matricula">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Nombre</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Nombre" name="nombre">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Apellidos</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Apellidos" name="apellidos">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Correo</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="email" placeholder="Email" name="email">
					 </div>
				 </div>
				 <br>
				  <div class="row">
					 <div class="col-lg-2">
						<label>Telefono</label>
					 </div>
					 <div class="col-lg-10">
						<input class="form-control" type="text" placeholder="Telefono" name="telefono">
					 </div>
				 </div>
				 <br>
				 <div class="row">
					 <div class="col-lg-2">
						<label>Edad</label>
					 </div>
					 <div class="col-lg-4">
						<input class="form-control" type="number" placeholder="Edad" name="edad">
					 </div>
					 <div class="col-lg-2">
						<label>Sexo</label>
					 </div>
					 <div class="col-lg-4">
						<select name="sexo" class="form-control">
							<option value="M">M</option>
							<option value="F">F</option>
						</select>
					 </div>
				 </div>
				 <br>
				 <hr>
				 <div class="row">
				 	<div class="col-lg-3">
				 		<button class="btn btn-lg btn-success" type="submit">REGISTRAR</button>
				 	</div>
				 	<div class="col-lg-3">
				 		<a href="usuarios.php" class="btn btn-lg btn-default">VISUALIZAR</a>
				 	</div>
				 </div>
			</form>
		</div>
	</div>
	<!---- inicio formulario-->
<?php	
	}
?>
</div>


</body>
</html>
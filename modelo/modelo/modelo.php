<?php
	class metodos{
		
		public function insertar($matricula_arg, $nombre_arg, $apellidos_arg, $correo_arg, $telefono_arg, $edad_arg, $sexo_arg){
			$modelo = new conectar();
			$conexion = $modelo->conection();
			$sql = "INSERT INTO usuarios(matricula, nombre, apellidos, correo, telefono, edad, sexo)VALUES(:matricula, :nombre, :apellido, :correo, :telefono, :edad, :sexo)";
			$check = $conexion->prepare($sql);
			$check->bindParam(":matricula", $matricula_arg);
			$check->bindParam(":nombre", $nombre_arg);
			$check->bindParam(":apellido", $apellidos_arg);
			$check->bindParam(":correo", $correo_arg);
			$check->bindParam(":telefono", $telefono_arg);
			$check->bindParam(":edad", $edad_arg);
			$check->bindParam(":sexo", $sexo_arg);
	         if(!$check){
	           return "Error al crear el registro";
	         }else{
	           $check->execute();
	           return "Registro Creado Con Exito";
	         }

		}
		
		
		public function actualizar($matricula_arg, $nombre_arg, $apellidos_arg, $correo_arg, $telefono_arg, $edad_arg, $sexo_arg){
			$modelo = new conectar();
			$conexion = $modelo->conection();
			$sql = "UPDATE usuarios SET matricula = :matricula, nombre = :nombre, apellidos = :apellido, correo = :correo, telefono = :telefono, edad = :edad, sexo = :sexo WHERE matricula = :matricula ";
			$check = $conexion->prepare($sql);
			$check->bindParam(":matricula", $matricula_arg);
			$check->bindParam(":nombre", $nombre_arg);
			$check->bindParam(":apellido", $apellidos_arg);
			$check->bindParam(":correo", $correo_arg);
			$check->bindParam(":telefono", $telefono_arg);
			$check->bindParam(":edad", $edad_arg);
			$check->bindParam(":sexo", $sexo_arg);
	         if(!$check){
	           return "Error al actualizar el registro";
	         }else{
	           $check->execute();
	           return "Registro actualizado Con Exito";
	         }

		}
		
		public function eliminar($matricula_arg){
			$modelo = new conectar();
			$conexion = $modelo->conection();
			$sql = "DELETE FROM usuarios WHERE matricula = :matricula ";
			$check = $conexion->prepare($sql);
			$check->bindParam(":matricula", $matricula_arg);
	         if(!$check){
	           return "Error al eliminar el registro";
	         }else{
	           $check->execute();
	           return "Registro eliminador Con Exito";
	         }

		}
		
		public function cargar(){
	         $rows = array();
	         $modelo = new conectar();
	         $conexion = $modelo->conection();
	         $sql = "SELECT * from usuarios";
	         $check = $conexion->prepare($sql);
	         $check->execute();
	         while ($result = $check->fetch()) {
	           $rows[] = $result;
	         }
	         return $rows;
  		}
		  public function cargar_matricula($matricula_arg){
				 $rows = array();
				 $modelo = new conectar();
				 $conexion = $modelo->conection();
				 $sql = "SELECT * from usuarios WHERE matricula = :matricula";
				 $check = $conexion->prepare($sql);
			     $check->bindParam(":matricula", $matricula_arg);
				 $check->execute();
				 while ($result = $check->fetch()) {
				   $rows[] = $result;
				 }
				 return $rows;
			}
		
	}
?>
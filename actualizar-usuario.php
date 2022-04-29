<?php
require_once 'includes/backend/conexion.php';

if(isset($_POST)) {

	//Recorro los valores del formulario para actualizar
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;

	//validamos la informacion antes de guardar en la BD

	$errores = array();

	//Validar apellidos

	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
		$apellido_validado = true;
	}else {
		$apellido_validado = false;
		$errores['apellidos'] = "El apellido no es válido";

	}

	//Validar nombres

	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	}else {
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";

	}


	//Validar emails

	if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
	}else {
		$email_validado = false;
		$errores['email'] = "El email no es válido";

	}



	$guardar_usuario = false;
	if(count($errores) == 0) {
		//Inserto el usuario a la BD

		if(isset($_GET['editar'])) {
			//Actualizar registros categorias
			$usuario_id = $_GET['editar'];
			$sql = "UPDATE usuarios SET apellidos='$apellidos',nombre='$nombre',email='$email',update_at=CURDATE() ". 
				" WHERE id = $usuario_id";

		}else {
			$guardar_usuario = true;
			$usuario = $_SESSION['usuario'];
			//Update registros a Usuario

			$sql = "UPDATE usuarios SET apellidos='$apellidos',nombre='$nombre',email='$email',update_at=CURDATE() ". 
				" WHERE id = ".$usuario['id'];

			// $sql = "UPDATE usuarios SET ".
			// 	"nombre = '$nombre', ".
			// 	"apellidos = '$apellidos', ".
			// 	"email = '$email' ".
			// 	"update_at = CURDATE() ".
			// 	"WHERE id = ".$usuario['id'];
		}

		
		$query= mysqli_query($db,$sql);

		if($guardar_usuario) {
			if($query) {
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['apellidos'] = $apellidos;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['completado'] = "El registro se ha actualizado";
			}else {
				$_SESSION['errores']['general'] = "Fallo al actualizar el usuario";
			}

		}

		if(isset($_GET['editar']) && $query ) {
			$_SESSION['completado'] = "El registro se ha actualizado con exito";


		}


	}else {

		$_SESSION['errores'] = $errores;

	}
	
}

if($guardar_usuario) {
	header('Location: mis-datos.php');
}

if(isset($_GET['editar'])) {
	header('Location: lista-usuarios.php');
}



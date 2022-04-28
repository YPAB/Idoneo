<?php

	if(isset($_POST)) {

	require_once 'includes/backend/conexion.php';

	//Recorro los valores del formulario
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;

	//validamos la informacion antes de guardar en la BD
	$errores = array();


	//Validar nombres

	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	}else {
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";

	}

	if(count($errores) == 0) {
		//Inserto el usuario a la BD


		//Insertar registros a Usuarios
		$sql = "INSERT INTO categorias VALUES(null,'$nombre',CURDATE());";
		$query= mysqli_query($db,$sql);

		if($query) {
			$_SESSION['completado'] = "El registro se ha registrado con exito";
		}else {
			$_SESSION['errores']['general'] = "Fallo al guardar la categoría";
		}


	}else {

		$_SESSION['errores'] = $errores;

	}
	
}

header('Location: listar-categorias.php');

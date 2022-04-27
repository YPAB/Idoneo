<?php

	//Iniciar la sesión y la conexion a la bd
	require_once 'includes/backend/conexion.php';

	//Recoger datos del Formulario

	if(isset($_POST)) {

		//Borrar error antiguo

		if(isset($_SESSION['error_login'])) {
					session_unset($_SESSION['error_login']);
		}

		//datos del formulario
		$email = trim($_POST['email']);
		$password= $_POST['password'];

		//Consulta para comprobar las credenciales del usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";

		$login = mysqli_query($db,$sql);

		if($login && mysqli_num_rows($login) == 1) {

			$usuario = mysqli_fetch_assoc($login);

			//Comprobar la contraseña

			$verify = password_verify($password,$usuario['password']);

			if($verify){
				//Utilizar una sesion para guardar los datos del usuario logueado

				$_SESSION['usuario'] = $usuario;

			}else {

				//Si algo falla enviar una session con el fallo
				$_SESSION['error_login'] = "Login Incorrecto !!";

			}


		}else {
			//Mensaje de Error
			$_SESSION['error_login'] = "Login Incorrecto !!";
		}

	}

	header('Location: index.php');
<?php 

require_once 'includes/backend/conexion.php';
	if(isset($_SESSION['usuario']) && isset($_GET['id'])) {
		$usuario_id = $_GET['id'];
		//$sql = "DELETE FROM categorias WHERE id = $usuario_id";
		$sql = "UPDATE usuarios SET delete_at=CURDATE() ". 
				" WHERE id = $usuario_id";

		$borrar = mysqli_query($db,$sql);


	}

header('Location: lista-usuarios.php');
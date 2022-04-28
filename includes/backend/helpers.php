<?php 

	function mostrarError($errores,$campo) {
		$alerta = '';
		if(isset($errores[$campo]) && !empty($campo)) {
			$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
		}

		return $alerta;

	}

	function borrarErrores(){
		$borrado = false;

		if(isset($_SESSION['errores'])) {
			$_SESSION['errores'] = null;
			$borrado = true;
		}

		if(isset($_SESSION['completado'])) {
			$_SESSION['completado'] = null;
			$borrado = true;
		}

		return $borrado;

	}


	function getCategorias($conexion){
		$sql = "SELECT * FROM categorias ORDER BY id ASC;";
		$categorias = mysqli_query($conexion,$sql);

		$result = array();

		if($categorias && mysqli_num_rows($categorias) >= 1) {
			$result = $categorias;
		}

		return $result;

	}


	function conseguirCategoria($conexion, $categoria_id){

		$sql = "SELECT * FROM categorias WHERE id = $categoria_id;";
		$categoria = mysqli_query($conexion,$sql);
		$result = array();

		if($categoria && mysqli_num_rows($categoria) >= 1) {
			$result = $categoria;
		}

		return $result;

	}
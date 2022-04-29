<?php require_once 'includes/backend/redireccion.php'; ?>
<?php require_once 'includes/backend/conexion.php';?>
<?php require_once 'includes/backend/helpers.php'; ?>
<?php
	$usuario_actual = getUsuario($db,$_GET['id']);

		if(!isset($usuario_actual['id'])){
			header('Location: lista-usuarios.php');
		}

?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>



<div id="contenedor">
<!-- CAJA PRINCIPAL -->

	<div id="principal">
		<h1>Editar Usuario <?=$usuario_actual['apellidos'].' '. $usuario_actual['nombre'] ?>  </h1>

		<form action="actualizar-usuario.php?editar=<?=$usuario_actual['id']?>" method="POST">

			<label for="apellidos">Apellidos</label>
			<input type="text" name="apellidos" value="<?=$usuario_actual['apellidos']?>"/>

			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?=$usuario_actual['nombre']?>" />
			
			<label for="email">Email</label>
			<input type="email" name="email" value="<?=$usuario_actual['email']?>" />
			

			<input type="submit" name="editar" value="editar" />
		</form>

			
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
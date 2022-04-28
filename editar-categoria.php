
<?php require_once 'includes/backend/redireccion.php'; ?>
<?php require_once 'includes/backend/conexion.php';?>
<?php require_once 'includes/backend/helpers.php'; ?>

<?php
	$categoria_actual = conseguirCategoria($db,$_GET['id']);
	var_dump($categoria_actual);
	die();

		if(!isset($categoria_actual['id'])){
			header('Location: listar-categorias.php');
		}

?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>

<div id="contenedor">
<!-- CAJA PRINCIPAL -->

	<div id="principal">
		<h1>Editar Categoría <?= $categoria_actual['nombre']?> </h1>

		<form action="guardar-categoria.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?= $categoria_actual['nombre']?>" />


			<input type="submit" name="guardar" value="guardar">
			
		</form>

			
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
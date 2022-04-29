<?php require_once 'includes/backend/redireccion.php'; ?>
<?php require_once 'includes/backend/conexion.php';?>
<?php require_once 'includes/backend/helpers.php'; ?>
<?php
	$categoria_actual = getCategoria($db,$_GET['id']);

		if(!isset($categoria_actual['id'])){
			header('Location: listar-categorias.php');
		}

?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>



<div id="contenedor">
<!-- CAJA PRINCIPAL -->

	<div id="principal">
		<h1>Editar Categoría <?=$categoria_actual['nombre']?> </h1>

		<form action="guardar-categoria.php?editar=<?=$categoria_actual['id']?>" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?= $categoria_actual['nombre']?>" />


			<input type="submit" name="editar" value="Editar">
			
		</form>

			
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
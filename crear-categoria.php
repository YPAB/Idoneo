<?php require_once 'includes/backend/redireccion.php'; ?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>

<div id="contenedor">
<!-- CAJA PRINCIPAL -->
	<div id="principal">
		<h1>Crear Categoría</h1>

		<form action="guardar-categoria.php" method="POST">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>


			<input type="submit" name="guardar" value="guardar">
			
		</form>
		
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
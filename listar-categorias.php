<?php require_once 'includes/backend/redireccion.php'; ?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>

<div id="contenedor">
<!-- CAJA PRINCIPAL -->
	<div id="principal">
		<h1>Categorías</h1>
		<table>
			<tr>
    			<th>Nombre</th>
    			<th>Accción</th>
  			</tr>
  			 <tr>
				<?php $categorias = getCategorias($db);

					while ($categoria = mysqli_fetch_assoc($categorias)): 
				?>

					<td><?=$categoria['nombre'] ?> </td>
					<td>
						<?php if(isset($_SESSION['usuario'])): ?>

							<a href="editar-categoria.php?id=<?=$categoria['id']?>" class="boton boton-verde">Editar</a>
							<a href="eliminar-categorias.php?id=<?=$categoria['id']?>" class="boton boton-verde">Eliminar</a>
						<?php endif;?>
					</td>
			</tr>
			<?php endWhile; ?>
		</table>
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
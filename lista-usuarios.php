<?php require_once 'includes/backend/redireccion.php'; ?>

<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>

<div id="contenedor">
<!-- CAJA PRINCIPAL -->
	<div id="principal">
		<h1>Usuarios registrados</h1>

		<?php if(isset($_SESSION['completado'])): ?>

			<div class="alerta alerta-exito">
				<?= $_SESSION['completado']; ?>
			</div>
		<?php  elseif(isset($_SESSION['errores']['general'])): ?>
			<div class="alerta alerta-error">
				<?= $_SESSION['errores']['general'] ?>
			</div>
					
		<?php  endif;?>
		
		<table>
			<tr>
				<th>Apellido</th>
    			<th>Nombre</th>
    			<th>Email</th>
    			<th>Accción</th>
  			</tr>
  			 <tr>
				<?php $usuarios = getUsuarios($db);

					while ($usuario = mysqli_fetch_assoc($usuarios)): 
				?>

					<td><?=$usuario['apellidos'] ?> </td>
					<td><?=$usuario['nombre'] ?> </td>
					<td><?=$usuario['email'] ?> </td>
					<td>
						<?php if(isset($_SESSION['usuario'])): ?>

							<a href="editar-usuario.php?id=<?=$usuario['id']?>" class="boton boton-verde">Editar</a>
							<a href="eliminar-usuario.php?id=<?=$usuario['id']?>" class="boton boton-verde">Eliminar</a>
						<?php endif;?>
					</td>
			</tr>
			<?php endWhile; ?>
		</table>
	</div>
</div>


<?php require_once'includes/layout/pie.php';?>
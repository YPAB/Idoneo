<?php require_once 'includes/layout/cabecera.php'; ?>
<?php require_once 'includes/layout/lateral.php'; ?>

<div id="contenedor">
<!-- CAJA PRINCIPAL -->

	<div id="principal">
		<h1> Mis datos </h1>

				<div id="register" class="formulario">
					<h3> Registrarse</h3>

				
					<?php if(isset($_SESSION['completado'])): ?>

						<div class="alerta alerta-exito">
							<?= $_SESSION['completado']; ?>
						</div>

					<?php  elseif(isset($_SESSION['errores']['general'])): ?>
						<div class="alerta alerta-error">
							<?= $_SESSION['errores']['general'] ?>
						</div>
					
					<?php  endif;?>

					<form action="actualizar-usuario.php" method="POST">

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos" value="<?= $_SESSION['usuario']['apellidos']; ?>"/>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>


						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" />
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>

						<label for="email">Email</label>
						<input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>" />
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>


						<input type="submit" name="submit" value="Actualizar" />
					</form>

					
				</div>
</div>
</div>


<?php require_once'includes/layout/pie.php';?>

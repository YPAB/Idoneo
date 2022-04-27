<?php require_once 'includes/backend/helpers.php'; ?>

<!-- BARRA LATERAL -->
			<aside id="sidebar">
				<div id="login" class="formulario">
					<h3> Iniciar Sesión</h3>
					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email"/>

						<label for="password"> Contraseña </label>
						<input type="password" name="password"/>

						<input type="submit" value="Ingresar" />
					</form>
					
				</div>


				<div id="register" class="formulario">
					<h3> Registrarse</h3>

					<!--Mostrar Errores -->

					<?php if(isset($_SESSION['completado'])): ?>

						<div class="alerta alerta-exito">
							<?= $_SESSION['completado']; ?>
						</div>

					<?php  elseif(isset($_SESSION['errores']['general'])): ?>
						<div class="alerta alerta-error">
							<?= $_SESSION['errores']['general'] ?>
						</div>
					
					<?php  endif;?>

					<form action="register.php" method="POST">

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos"/>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>


						<label for="nombre">Nombre</label>
						<input type="text" name="nombre"/>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>


						<label for="email">Email</label>
						<input type="email" name="email"/>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>

						<label for="password"> Contraseña </label>
						<input type="password" name="password"/>
						<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : ''; ?>

						<input type="submit" name="submit" value="Registrar" />
					</form>

					<?php borrarErrores(); ?>
					
				</div>
				
			</aside>
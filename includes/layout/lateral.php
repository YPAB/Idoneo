<?php require_once 'includes/backend/helpers.php'; ?>

<!-- BARRA LATERAL -->
			<aside id="sidebar">

				<?php if(isset($_SESSION['usuario'])): ?>
					<div id="usuario-logueado" class="bloque">
						<h3> Bienvenido: <?=$_SESSION['usuario']['nombre'].' '. $_SESSION['usuario']['apellidos']; ?> </h3>
						<a href="cerrar-session.php" class="boton">Cerrar Sesión</a>
						<a href="mis-datos.php" class="boton boton-naranja">Mis Datos</a>
						<a href="categoria.php" class="boton boton-verde">Categorias</a>
					</div>


				<?php endif; ?>

				<div id="login" class="formulario">
					<!--Mostrar Errores -->

					<?php if(isset($_SESSION['error_login'])): ?>
						<div class="alerta alerta-error">
							<?= $_SESSION['error_login']; ?>
						</div>

					<?php endif; ?>

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
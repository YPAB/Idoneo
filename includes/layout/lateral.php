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
					<form action="register.php" method="POST">

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos"/>

						<label for="nombre">Nombre</label>
						<input type="text" name="nombre"/>


						<label for="email">Email</label>
						<input type="email" name="email"/>

						<label for="password"> Contraseña </label>
						<input type="password" name="password"/>

						<input type="submit" value="Registrar" />
					</form>
					
				</div>
				
			</aside>
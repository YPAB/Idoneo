<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8" />

	<link href="public/assets/css/styles-principal.css" rel="stylesheet" >
	<title>Prueba Idoneo - SYP</title>
	
</head>
<body>

	<!-- CABECERA -->

	<header id="cabecera">
		<div id="logo">
			<a href="index.php">
				Sistema de autenticación - PHP-JS-CSS

			</a>
			
		</div>


		<!-- MENU -->

		<nav id="menu">
			<ul>
				<li>
					<a href="index.php"> Inicio</a>
				</li>

				<li>
					<a href="index.php"> Categorias</a>
				</li>

				<li>
					<a href="index.php">Contacto</a>
				</li>

				<li>
					<a href="index.php">Quienes Somos</a>
				</li> 
				
			</ul>
		
		</nav>
	</header>

	<div id="contenedor">
		<!-- BARRA LATERAL -->
			<aside id="sidebar">
				<div id="login" class="contenedor-aside">
					<h3> Iniciar Sesión</h3>
					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email"/>

						<label for="password"> Contraseña </label>
						<input type="password" name="password"/>

						<input type="submit" value="Ingresar" />
					</form>
					
				</div>


				<div id="register" class="contenedor-aside">
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

		<!-- CAJA PRINCIPAL -->

		<div id="principal">
			<h1>Ultimos Artículos</h1>

			<article class="entrada">
				<h2>Titulo del artículo</h2>

				<p>
					Entonces, un programador PHP (o PHP developer) es el responsable de escribir, probar y dar mantenimiento a código para páginas web, así como detectar y solucionar errores relacionados con el código.
				</p>
			</article>

			<article class="entrada">
				<h2>Titulo del artículo</h2>

				<p>
					Entonces, un programador PHP (o PHP developer) es el responsable de escribir, probar y dar mantenimiento a código para páginas web, así como detectar y solucionar errores relacionados con el código.
				</p>
			</article>

			<article class="entrada">
				<h2>Titulo del artículo</h2>

				<p>
					Entonces, un programador PHP (o PHP developer) es el responsable de escribir, probar y dar mantenimiento a código para páginas web, así como detectar y solucionar errores relacionados con el código.
				</p>
			</article>

			<article class="entrada">
				<h2>Titulo del artículo</h2>

				<p>
					Entonces, un programador PHP (o PHP developer) es el responsable de escribir, probar y dar mantenimiento a código para páginas web, así como detectar y solucionar errores relacionados con el código.
				</p>
			</article>
			
		</div>
		
	</div>

	<footer id="pie">

		<p>Desarrollado por Sanchez Yonatan Pablo - Corrientes-Argentina &copy; 2022</p>
		
	</footer>
	

	

	<!-- PIE DE PAGINA -->
	
</body>

</html>
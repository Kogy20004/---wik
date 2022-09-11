<?php

include("../db.php");


$sql = "SELECT * FROM `login`";
$query = mysqli_query($db, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD</title>
	<link rel="stylesheet" href="../../Front-end/css/general.css">
	<link rel="stylesheet" href="../../Front-end/css/barra-nav.css">
	<link rel="stylesheet" href="../../Front-end/css/iniciar_sesion.css">
	<link rel="stylesheet" href="../../Front-end/css/crud.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
	<div class="barra-nav">
		<nav>
			<ul>
				<a href="../../index.html">
					<li>Inicio</li>
				</a>
				<a href="../../Categorias.html">
					<li>Categorías</li>
				</a>
				<a href="../../conocenos.html">
					<li>Conócenos</li>
				</a>
				<div class="buscador"></div>
			</ul>
		</nav>
	</div>
	<header>
		<p></p>
	</header>
	<div class="container">
		<div class="row">

			<div class="articulos col-1">
				<article>
					<div class="but-svg">
						<a href="../../index.html" class="home">
							<button type="button" class="btn btn-secondary">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
									<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
								</svg>
							</button>
						</a>
					</div>
					<form action="insertar.php" method="post">
						<div class="formulario">
							<div class="input">
								<label for="email">Ingresa Correo electrónico</label>
								<input type="email" name="email" id="email" placeholder="Correo electrónico" autofocus>
							</div>
							<div class="input">
								<label for="pass">Ingresa la contraseña</label>
								<input type="password" name="pass" id="pass" placeholder="Contraseña">
							</div>
							<div class="button">
								<input type="submit" name="registrar" value="Registrar">
							</div>
						</div>
					</form>
				</article>
			</div>

			<div class="articulos col-2">
				<article>
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Correo electrónico</th>
								<th>Contraseña</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row = mysqli_fetch_array($query)) {
							?>
								<tr>

									<th><?php echo $row['id'];  ?></th>
									<th><?php echo $row['email'];  ?></th>
									<th style="-webkit-text-security: disc !important;"><?php echo $row['pass'];  ?></th>
									<th><a href="actualizar.php?id=<?php echo $row['id']; ?>">Editar</a></th>
									<th><a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
								</tr>
							<?php
							};
							?>
						</tbody>
					</table>
				</article>
			</div>
		</div>
	</div>
</body>

</html>
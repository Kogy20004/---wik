<?php

include("../db.php");


$sql = "SELECT * FROM `login`";
$query = mysqli_query($db, $sql);

$row = mysqli_fetch_array($query);
$Meses_año = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"]

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
							<button type="button" class="">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
									<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
								</svg>
							</button>
						</a>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Correo electrónico</th>
								<th>Contraseña</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Día_N</th>
								<th>Mes_N</th>
								<th>Año_N</th>
								<th>Genero</th>
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
									<th><?php echo $row['Nombre'];  ?></th>
									<th><?php echo $row['Apellido'];  ?></th>
									<th><?php echo $row['Día'];  ?></th>
									<th><?php if ($row['Mes'] != "") {
												echo $Meses_año[$row['Mes'] - 1];
											}   ?></th>
									<th><?php echo $row['Año'];  ?></th>
									<th><?php if ($row['Genero'] == 1) {
												echo "Hombre";
											} elseif ($row['Genero'] == 2) {
												echo "Mujer";
											} ?></th>
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
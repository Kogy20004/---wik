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
	<link rel="stylesheet" href="../../Front-end/css/crud.css">
	<link rel="stylesheet" href="../../Front-end/css/general.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-1">
				<div class="home">
					<a href="../../index.html" class="home">
						<button type="button" class="btn btn-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
								<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
							</svg>
						</button>
					</a>
				</div>
				<h1>Ingresar datos</h1>
				<form action="insertar.php" method="POST">
					<div>
						<label for="email">Correo electrónico</label>
						<input type="email" class="" name="email" placeholder="Correo electrónico">
					</div>
					<div>
						<label for="pass">Contraseña</label>
						<input type="text" class="" name="pass" placeholder="Contraseña">
					</div>
					<input type="submit" class="button">
				</form>
			</div>
			<div class="col-2">
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
								<th><?php echo $row['pass'];  ?></th>
								<th><a href="actualizar.php?id=<?php echo $row['id']; ?>">Editar</a></th>
								<th><a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
							</tr>
						<?php
						};
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>
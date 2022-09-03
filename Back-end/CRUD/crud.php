<?php

include("conex.php");
$con = conectar();

$sql = "SELECT * FROM `login`";
$query = mysqli_query($con, $sql);

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
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<link rel="stylesheet" href="../../Front-end/css/general.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-1">
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
				<table class="table" >
					<thead >
						<tr>
							<th>Id</th>
							<th>Correo electrónico</th>
							<th>Contraseña</th>
							<th></th>
							<th></th>
						</tr>
					</thead >
					<tbody >
						<?php
						while ($row = mysqli_fetch_array($query)) {
						?>
							<tr>

								<th><?php echo $row['id'];  ?></th>
								<th><?php echo $row['email'];  ?></th>
								<th><?php echo $row['pass'];  ?></th>
								<th><a href="actualizar.php?id=<?php echo $row['id'];?>">Editar</a></th>
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
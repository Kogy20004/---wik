<?php
include("conex.php");
$con = conectar();

$id_I = $_GET['id'];

$sql = "SELECT * FROM `login` WHERE id = '$id_I' ";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="../../Front-end/css/form.css">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<div class="container">

		<div class="col-4 form">
			<form action="update.php" method="POST" >
				<input type="hidden" name="id" value="<?php echo $row ?>">
				<div class="mb-3">
					<label for="email" class="form-label">Ingresa el correo electrónico</label>
					<input type="text" class="form-control" name="email" placeholder="Correo electrónico" value="<?php echo $row['email'] ?>">

				</div>
				<div class="mb-3">
					<label for="pass" class="form-label">Ingresa la contraseña</label>
					<input type="text" class="form-control" name="pass" placeholder="Contraseña" require value="<?php echo $row['pass'] ?>">
				</div>
				<input type="submit" value="Actualizar" class="btn btn-primary">
			</form>
		</div>
	</div>

</body>

</html>
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
</head>

<body>
	<div class="container">
		<form action="update.php" method="$_POST">

			<input type="hidden" name="id" value="<?php echo $row ?>">

			<input type="text" class="" name="email" placeholder="Correo electrónico" value="<?php echo $row['email'] ?>">
			<input type="text" class="" name="pass" placeholder="Co" value="<?php echo $row['email'] ?>">

			<input type="submit" value="Actualizar">
		</form>
	</div>
</body>

</html>
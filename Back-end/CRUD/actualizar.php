<?php
include("../db.php");

$id_I = $_GET['id'];

$sql = "SELECT * FROM `login` WHERE id = '$id_I' ";
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
	<title>Actualizar</title>
	<link rel="stylesheet" href="../../Front-end/css/general.css">
	<link rel="stylesheet" href="../../Front-end/css/barra-nav.css">
	<link rel="stylesheet" href="../../Front-end/css/iniciar_sesion.css">
	<link rel="stylesheet" href="../../Front-end/css/crud.css">
	<link rel="stylesheet" href="../../Front-end/css/datos_usuarios.css">
</head>

<body>
	<div class="cuerpo">
		<div class="barra-nav">
			<nav>
				<ul>
					<a href="index.html">
						<li>Inicio</li>
					</a>
					<a href="Categorias.html">
						<li>Categorías</li>
					</a>
					<a href="conocenos.html">
						<li>Conócenos</li>
					</a>
					<div class="buscador"></div>
				</ul>
			</nav>
		</div>
		<header>
			<h2></h2>
		</header>
		<div class="container">
			<div class="articulos">
				<article>
					<div class="but-svg">
						<a href="crud.php">
							<button>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
								</svg>
							</button>
						</a>
					</div>
					<form action="update.php" method="post">
						<div class="formulario">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<div class="input">
								<label for="email">Actualizar el Correo electrónico</label>
								<input type="email" name="email" id="email" placeholder="Correo electrónico" value="<?php echo $row['email'] ?>">
							</div>
							<div class="input">
								<label for="pass">Actualizar la contraseña</label>
								<input type="password" name="pass" id="pass" placeholder="Contraseña" value="<?php echo $row['pass'] ?>">
							</div>
							<div class="formulario">
								<div class="input">
									<div>
										<label for="Nombre">Nombres: </label>
										<input type="text" name="Nombre" id="Nombre" placeholder="Ej; Mariana" value="<?php echo $row['Nombre'] ?>">
									</div>
									<div>
										<label for="Apellido">Apellidos: </label>
										<input type="text" name="Apellido" id="Apellido" placeholder="Ej: Angel Torres" value="<?php echo $row['Apellido'] ?>">
									</div>
								</div>
								<div class="input">
									<label for="birthday_day">Fecha de nacimiento</label>
									<div class="Fecha_datos">
										<div>
											<div>
												<label for="Día">Dia </label>
												<select aria-label="Día" name="Día" id="Día">
													<?php
													for ($i = 1; $i <= 31; $i++) {
														if ($i == $row['Día']) {
													?>
															<option value="<?php echo $i ?>" selected><?php echo $i ?></option>
														<?php
														} else {
														?>
															<option value="<?php echo $i ?>"><?php echo $i ?></option>
													<?php
														}
													}
													?>
												</select>
											</div>
											<div>
												<label for="Mes">Mes </label>
												<select aria-label="Mes" name="Mes" id="Mes">
													<?php
													for ($i = 1; $i <= 12; $i++) {
														if ($i == $row['Mes']) {
													?>
															<option value="<?php echo $i ?>" selected><?php echo $Meses_año[$i - 1] ?></option>
														<?php
														} else {
														?>
															<option value="<?php echo $i ?>"><?php echo $Meses_año[$i - 1] ?></option>
													<?php														}
													}
													?>
												</select>
											</div>
											<div>
												<label for="Año">Año </label>
												<select aria-label="Año" name="Año" id="Año">
													<?php
													for ($i = 2022; $i >= 1905; $i--) {
														if ($i == $row['Año']) {
													?>
															<option value="<?php echo $i ?>" selected><?php echo $i ?></option>
														<?php
														} else {
														?>
															<option value="<?php echo $i ?>"><?php echo $i ?></option>
													<?php														}
													}
													?>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="input">
									<div>
										<label for="Genero">Hombre</label>
										<?php
										if ($row['Genero'] == 1) {
										?>
											<input type="radio" name="Genero" value="1" checked>
										<?php
										} else {
										?>
											<input type="radio" name="Genero" value="1">
										<?php
										}
										?>
									</div>
									<div>
										<label for="Genero">Mujer</label>
										<?php
										if ($row['Genero'] == 2) {
										?>
											<input type="radio" name="Genero" value="2" checked>
										<?php
										} else {
										?>
											<input type="radio" name="Genero" value="2">
										<?php
										}
										?>
									</div>
								</div>
								<div class="button">
									<input type="submit" name="Actualizar" value="Actualizar">
								</div>
							</div>
						</div>
					</form>
				</article>
			</div>
		</div>
	</div>
</body>

</html>
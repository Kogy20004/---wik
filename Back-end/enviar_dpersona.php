<?php

include("db.php");

$id = $_POST['id'];
$Nombre_I = $_POST['Nombre'];
$Apellido_I = $_POST['Apellido'];
$Día_I = $_POST['Día'];
$Mes_I = $_POST['Mes'];
$Año_I = $_POST['Año'];
$Genero_I = $_POST['Genero'];

$sql = "UPDATE `login` SET Nombre='$Nombre_I',Apellido='$Apellido_I',Día='$Día_I',Mes='$Mes_I',Año='$Año_I',Genero='$Genero_I' WHERE id='$id' ";

$ejecutar = mysqli_query($db, $sql);

if ($ejecutar) {
	header("location:../ayudanos.html");
}

mysqli_close($db);

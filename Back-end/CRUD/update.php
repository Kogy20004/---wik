<?php
include("../db.php");
$id_I = $_POST['id'];
$email_I = $_POST['email'];
$pass_I = $_POST['pass'];
$Nombre_I = $_POST['Nombre'];
$Apellido_I = $_POST['Apellido'];
$Día_I = $_POST['Día'];
$Mes_I = $_POST['Mes'];
$Año_I = $_POST['Año'];
$Genero_I = $_POST['Genero'];

$sql = "UPDATE `login` SET email='$email_I',pass='$pass_I', Nombre='$Nombre_I',Apellido='$Apellido_I',Día='$Día_I',Mes='$Mes_I',Año='$Año_I',Genero='$Genero_I' WHERE id='$id_I' ";

$query = mysqli_query($db, $sql);

if ($query) {
    header("location: crud.php");
}

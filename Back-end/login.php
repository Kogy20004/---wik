<?php

include("db.php");

$email_I = $_POST['email'];
$password_I = $_POST['pass'];

$sql1 = "SELECT * FROM `login` WHERE email='$email_I' and pass='$password_I'";

$resultado1 = mysqli_query($db, $sql1);
$filas = mysqli_num_rows($resultado1);

// while ($row = mysqli_fetch_array($resultado1)) {
//   $email = $row['email'];
//   $pass = $row['password'];
// }

if ($filas) {
  header("location:../ayudanos.html");
} else {
  echo "No has ingresado al sistema";
}

<?php

include("db.php");

$email_I = $_POST['email'];
$password_I = $_POST['pass'];

$sql1 = "SELECT * FROM `login` WHERE email='$email_I' and pass='$password_I'";

$resultado1 = mysqli_query($db, $sql1);
$filas = mysqli_num_rows($resultado1);


  if ($filas) {
    if ($email_I == "kogyisaza2004@gmail.com" or $email_I == "kogyisaza@gmail.com") {
      header("location: CRUD/crud.php");
    }else {
      header("location:../ayudanos.html");
    }
  } else {
    echo'
		<script>
			alert("El usuario no esta registrado")
			window.location = "../Iniciar_sesion.php";
		</script>
		';
  }


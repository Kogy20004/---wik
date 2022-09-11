<?php

	include 'db.php';

	
	$correo = $_POST['email'];
	$clave = $_POST['pass'];


	$query = "INSERT INTO `login`(email, pass) 
			VALUES('$correo','$clave')";

	$verificar_correo = mysqli_query($db, "SELECT * FROM `login` WHERE email='$correo'");

	if(mysqli_num_rows($verificar_correo) > 1){
		echo'
		<script>
			alert("Este correo ya esta registrado, Intenta con otro diferente");
			window.location = "../Registrarse.php";
		</script>
		';
		exit();
	}

	$ejecutar = mysqli_query($db, $query);


	$sql = "SELECT * FROM `login` where email='$correo'";
	$query = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($query);


	$id = $row['id'];

	if($ejecutar){
		echo'
		<script>
			alert("Usuario almacenado exitosamente")
		</script>
		';
		header("location:../datos_usuarios.php?id=$id");
	}else{
		echo'
		<script>
			alert("Intentalo de nuevo, usuario no almacenado")
			window.location = "../Registrarse.php";
		</script>
		';
	}

	mysqli_close($db);
?>
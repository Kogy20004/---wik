<?php
include("conex.php");
$con =conectar();

$email_I = $_POST['email'];
$pass_I = $_POST['pass'];

$sql= "INSERT INTO `login`(email,pass) VALUES('$email_I','$pass_I')";
$verificar_correo = mysqli_query($con, "SELECT * FROM `login` WHERE email='$email_I'");

if(mysqli_num_rows($verificar_correo) > 1){
    echo'
    <script>
        alert("Este correo ya esta registrado, Intenta con otro diferente");
        window.location = "crud.php";
    </script>
    ';
    exit();
}
$query =mysqli_query($con,$sql) ;
if ( $query){
    header("location: crud.php");
}
mysqli_close($con);
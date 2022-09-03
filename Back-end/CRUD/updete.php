<?php
    include("conex.php");
    $con = conectar();
    $email_I=$_POST['email'];
    $pass_I=$_POST['pass'];

$sql = "UPDATE `login` SET pass='$pass_I' WHERE  email='$email_I'";
$query = mysqli_query($con,$sql);

    if ($query) {
        header("location: crud.php");
    }
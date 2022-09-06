<?php
include("../db.php");
$id = $_GET['id'];

$sql = "DELETE FROM `login` WHERE id ='$id'";
$query = mysqli_query($db, $sql);

if ($query) {
    header("location: crud.php");
}

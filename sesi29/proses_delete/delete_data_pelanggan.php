<?php 

include("../connection.php");

$pelanggan_id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM pelanggan WHERE id = '$pelanggan_id';");

header('location:../pelanggan.php');

?>
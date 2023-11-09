<?php 

include("../connection.php");

$produk_id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM produk WHERE id = '$produk_id';");

header('location:../produk.php');

?>
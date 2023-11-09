<?php 

include("../connection.php");

$penjualan_id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM penjualan WHERE id = '$penjualan_id';");

header('location:../penjualan.php');

?>
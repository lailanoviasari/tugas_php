<?php 

include("../connection.php");

$supplier_id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM supplier WHERE id = '$supplier_id';");

header('location:../supplier.php');

?>
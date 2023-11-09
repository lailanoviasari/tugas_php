<?php
include('../../connection.php');

$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$result = mysqli_query($connection, "INSERT INTO `supplier`(`nama`, `telpon`, `alamat`) VALUES ('$nama','$telpon','$alamat');");

header('location:../../supplier.php');

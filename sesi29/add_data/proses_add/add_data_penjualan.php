<?php
include('../../connection.php');

$pelanggan_id = $_POST['pelanggan_id'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$keterangan = $_POST['keterangan'];
$total = $_POST['total'];

$result = mysqli_query($connection, "INSERT INTO `penjualan`(`tanggal`, `keterangan`, `pelanggan_id`, `total`) VALUES ('$tanggal_penjualan','$keterangan','$pelanggan_id','$total');");

header('location:../../penjualan.php')
?>
<?php
include('../../connection.php');

$penjualan_id = $_GET['id'];
$pelanggan_id = $_POST['pelanggan_id'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$keterangan = $_POST['keterangan'];
$total = $_POST['total'];

$result = mysqli_query($connection, "UPDATE penjualan SET `tanggal` = '$tanggal_penjualan', `keterangan` = '$keterangan', `pelanggan_id` = '$pelanggan_id', `total` = '$total' WHERE id = '$penjualan_id';");

header('location:../../penjualan.php')
?>
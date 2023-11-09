<?php
include('../../connection.php');

$nama_produk = $_POST['nama_produk'];
$kode_produk = $_POST['kode_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$supplier_id = $_POST['supplier_id'];

$result = mysqli_query($connection, "INSERT INTO `produk`(`kode_produk`, `nama_produk`, `harga`, `stok`, `satuan`, `supplier_id`) VALUES ('$kode_produk','$nama_produk','$harga','$stok', '$satuan', '$supplier_id');");


header('location:../../produk.php');

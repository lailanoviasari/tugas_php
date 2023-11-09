<?php

include("../../connection.php");

$pelanggan_id = $_GET['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

if ($jenis_kelamin == 0) {
    $result = mysqli_query($connection, "UPDATE pelanggan SET nama = '$nama', jenis_kelamin = 'pria', alamat = '$alamat', telpon = '$telpon' WHERE id = '$pelanggan_id'");
} elseif ($jenis_kelamin == 1) {
    $result = mysqli_query($connection, "UPDATE pelanggan SET nama = '$nama', jenis_kelamin = 'wanita', alamat = '$alamat', telpon = '$telpon' WHERE id = '$pelanggan_id'");
}

header('location:../../pelanggan.php');

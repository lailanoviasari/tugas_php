<?php
include('../../connection.php');

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

if ($jenis_kelamin == 0) {
    $result = mysqli_query($connection, "INSERT INTO `pelanggan`(`nama`, `jenis_kelamin`, `telpon`, `alamat`) VALUES ('$nama','pria','$telpon','$alamat');");
} elseif ($jenis_kelamin == 1) {
    $result = mysqli_query($connection, "INSERT INTO `pelanggan`(`nama`, `jenis_kelamin`, `telpon`, `alamat`) VALUES ('$nama','wanita','$telpon','$alamat');");
}

header('location:../../pelanggan.php');

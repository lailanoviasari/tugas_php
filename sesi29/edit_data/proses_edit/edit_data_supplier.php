<?php
include('../../connection.php');

$supplier_id = $_GET['id'];
$nama = $_POST['nama'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$result = mysqli_query($connection, "UPDATE `supplier` SET `nama`='$nama',`telpon`='$telpon',`alamat`='$alamat' WHERE id = '$supplier_id';");

header('location:../../supplier.php');

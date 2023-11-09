<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Supplier</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
include("../connection.php");

$supplier_id = $_GET['id'];

$supplier = mysqli_query($connection, "SELECT * FROM supplier WHERE id = '$supplier_id'");

foreach ($supplier as $key => $data) {
    $nama = $data['nama'];
    $telpon = $data['telpon'];
    $alamat = $data['alamat'];
}

echo $nama;

?>

<body>
    <div class="container-xxl">
        <div class="position-absolute top-10 start-50 translate-middle-x my-5">
            <h4 class="text-center m-3">Tambah Data Supplier</h4>
            <hr>
            <form action="proses_edit/edit_data_supplier.php?id=<?php echo $supplier_id?>" method="post">
                <div class="mb-3">
                    <labelclass="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required="">
                </div>
                <div class="mb-3">
                    <label for="telpon" class="form-label">Telpon</label>
                    <input type="text" class="form-control" id="telpon" name="telpon" value="<?php echo $telpon ?>" required="">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" required=""><?php echo $alamat ?></textarea>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="../supplier.php" name="back" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="return confirm('Are you sure want to save your changes?');">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
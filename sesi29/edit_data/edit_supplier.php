<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Supplier</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

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

<body class="bg-secondary">
    <div class="card shadow bg-dark text-light w-25" style="height: 500px;; margin: 100px auto;">
        <div class="card-body">
            <h4 class="text-center m-3">Edit Data Supplier</h4>
            <hr>
            <form action="proses_edit/edit_data_supplier.php?id=<?php echo $supplier_id ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
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
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="edit_data(<?php echo $supplier_id ?>)">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- begin :: CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- end :: CDN jquery -->

    <!-- begin :: jquery edit data supplier -->
    <script>
        function edit_data(supplier_id) {
            $.ajax({
                method: 'POST',
                url: 'proses_edit/edit_data_supplier.php?id=' + supplier_id,
                data: {
                    supplier_id: supplier_id
                },
                success: function(result) {
                    confirm('Are you sure want to save your change?')
                }
            })
        }
    </script>
    <!-- end :: jquery edit data supplier -->

</body>

</html>
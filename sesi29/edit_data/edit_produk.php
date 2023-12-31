<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

</head>

<?php
include("../connection.php");

$produk_id = $_GET['id'];

$supplier = mysqli_query($connection, "SELECT id, nama FROM supplier");
$produk = mysqli_query($connection, "SELECT *, produk.id, supplier.id, nama FROM produk JOIN supplier ON supplier_id = supplier.id WHERE produk.id = '$produk_id'");

foreach ($produk as $key => $data) {
    $kode_produk = $data['kode_produk'];
    $nama_produk = $data['nama_produk'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $satuan = $data['satuan'];
    $supplier_id = $data['supplier_id'];
    $nama_supplier = $data['nama'];
}

?>

<body class="bg-secondary">
    <div class="card shadow bg-dark text-light w-25" style="height: 500px;; margin: 100px auto;">
        <div class="card-body">
            <h4 class="text-center m-3">Edit Data Produk</h4>
            <hr>
            <form action="proses_edit/edit_data_produk.php?id=<?php echo $produk_id ?>" method="post">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="kode_produk" class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="<?php echo $kode_produk ?>" required="">
                    </div>
                    <div class="col-6">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk ?>" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>" required="">
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok ?>" required="">
                    </div>
                    <div class="col-4">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $satuan ?>" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="supplier_id" class="form-label">ID Supplier</label>
                    <select class="form-select" name="supplier_id" id="supplier_id">
                        <?php foreach ($supplier as $key => $data) {
                            if ($data['id'] == $supplier_id) { ?>
                                <option value="<?php echo $data["id"] ?>" selected><?php echo $data["id"], ' | ',  $data["nama"] ?></option>
                            <?php } else { ?>
                                <option value="<?php echo $data["id"] ?>"><?php echo $data["id"], ' | ',  $data["nama"] ?></option>
                        <?php }
                        } ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="../produk.php" name="back" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="edit_data(<?php $produk_id ?>)">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- begin :: CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- end :: CDN jquery -->

    <!-- begin :: jquery edit data produk -->
    <script>
        function edit_data(produk_id) {
            $.ajax({
                method: 'POST',
                url: 'proses_edit/edit_data_produk.php?id=' + produk_id,
                data: {
                    produk_id: produk_id
                },
                success: function(result) {
                    confirm('Are you sure want to save your change?')
                }
            })
        }
    </script>
    <!-- end :: jquery edit data produk -->


</body>

</html>
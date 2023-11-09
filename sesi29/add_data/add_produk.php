<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-xxl">
        <div class="position-absolute top-10 start-50 translate-middle-x my-5">
            <h4 class="text-center m-3">Tambah Data Produk</h4>
            <hr>
            <form action="proses_add/add_data_produk.php" method="post">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="kode_produk" class="form-label">Kode Produk</label>
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" required="">
                    </div>
                    <div class="col-6">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required="">
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" required="">
                    </div>
                    <div class="col-4">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="supplier_id" class="form-label">ID Supplier</label>
                    <select class="form-select" name="supplier_id" id="supplier_id">
                        <?php include("../connection.php");

                        $suppliers = mysqli_query($connection, "SELECT id, nama FROM supplier");

                        foreach ($suppliers as $key => $supplier) { ?>
                            <option value="<?php echo $supplier["id"] ?>"><?php echo $supplier["id"], ' | ',  $supplier["nama"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="../produk.php" name="back" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
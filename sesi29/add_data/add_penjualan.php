<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penjualan</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

</head>

<?php
include("../connection.php");

$pelanggan = mysqli_query($connection, "SELECT * FROM pelanggan");
?>

<body class="bg-secondary">
    <div class="card shadow bg-dark text-light w-25" style="height: 500px;; margin: 100px auto;">
        <div class="card-body">
            <h4 class="text-center m-3">Tambah Data Penjualan</h4>
            <hr>
            <form action="proses_add/add_data_penjualan.php" method="post">
                <div class="mb-3">
                    <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                    <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan" required="">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required="">
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" class="form-control" id="total" name="total" required="">
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label">ID Pelanggan</label>
                    <select class="form-select" name="pelanggan_id" id="pelanggan_id">
                        <?php foreach ($pelanggan as $key => $data) { ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data["id"] . ' | ' .  $data["nama"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="../penjualan.php" name="back" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary" disabled="">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- begin :: CDN JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- end :: CDN JQuery -->

    <!-- begin :: keyup ket and total -->
    <script>
        $(document).ready(function() {
            $("#keterangan").keyup(function() {
                $("#submit").prop('disabled', false)
            });

            $("#total").keyup(function() {
                $("#submit").prop('disabled', false)
            })
        })
    </script>
    <!-- end :: keyup ket and total -->

</body>

</html>
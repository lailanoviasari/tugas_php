<?php
include("../connection.php");

$pelanggan_id = $_GET['id'];

$pelanggan = mysqli_query($connection, "SELECT * FROM pelanggan WHERE id = '$pelanggan_id'");

foreach ($pelanggan as $key => $data) {
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $telpon = $data['telpon'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

</head>

<body class="bg-secondary">
    <div class="card shadow bg-dark text-light w-25" style="height: 500px;; margin: 100px auto;">
        <div class="card-body">
            <h4 class="text-center m-3">Edit Data Pelanggan</h4>
            <hr>
            <form action="proses_edit/edit_data_pelanggan.php?id=<?php echo $pelanggan_id ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required="">
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check col-5 ms-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="0" <?php if($jenis_kelamin == 'pria') {echo 'checked';} ?>>
                        <label class="form-check-label" for="male">
                            Pria
                        </label>
                    </div>
                    <div class="form-check col-5 ms-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="1"  <?php if($jenis_kelamin == 'wanita') {echo 'checked';} ?>>
                        <label class="form-check-label" for="female">
                            Wanita
                        </label>
                    </div>
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
                        <a href="../pelanggan.php" name="back" class="btn btn-primary">Back</a>
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
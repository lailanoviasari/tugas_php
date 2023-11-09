<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-xxl">
        <div class="position-absolute top-10 start-50 translate-middle-x my-5">
            <h4 class="text-center m-3">Tambah Data Pelanggan</h4>
            <hr>
            <form action="proses_add/add_data_pelanggan.php" method="post">
                <div class="mb-3">
                    <labelclass="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required="">
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <div class="form-check col-5 ms-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="male" value="0" checked>
                        <label class="form-check-label" for="male">
                            Pria
                        </label>
                    </div>
                    <div class="form-check col-5 ms-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="female" value="1">
                        <label class="form-check-label" for="female">
                            Wanita
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telpon" class="form-label">Telpon</label>
                    <input type="text" class="form-control" id="telpon" name="telpon" required="">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" name="alamat" required=""></textarea>
                </div>
                <div class="row">
                    <div class="col-6 text-start">
                        <a href="../pelanggan.php" name="back" class="btn btn-primary">Back</a>
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
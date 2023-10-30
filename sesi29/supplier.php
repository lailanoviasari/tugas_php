<?php
include("connection.php");

$Q_supplier = mysqli_query($connection, "SELECT * FROM supplier;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Supplier</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-xxl">
        <nav class="navbar navbar-expand-lg bg-light position-relative">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="letter-p.png" alt="Bootstrap" width="30" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="penjualan.php">Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pelanggan.php">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="produk.php">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active bg-secondary text-light" aria-current="page" href="supplier.php">Supplier</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="position-absolute top-10 start-50 translate-middle-x my-5">
            <h4 class="text-center m-3">Daftar Data Supplier</h4>
            <hr>
            <table class="table table-dark table-hover" style="width:800px;">
                <thead>
                    <tr class="text-center">
                        <th class="border" style="width:15%;">ID Supplier</th>
                        <th class="border">Nama</th>
                        <th class="border">Telpon</th>
                        <th class="border">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($Q_supplier)) { ?>
                        <tr class="border">
                            <td class="border"><?php echo $data['id'] ?></td>
                            <td class="border"><?php echo $data['nama'] ?></td>
                            <td class="border"><?php echo $data['telpon'] ?></td>
                            <td class="border"><?php echo $data['alamat'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    </div>
</body>

</html>
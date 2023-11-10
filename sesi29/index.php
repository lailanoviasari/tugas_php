<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Penjualan</title>

    <!-- begin :: CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- end :: CDN Bootstrap -->

</head>

<body class="bg-secondary text-light">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-secondary position-relative">
            <a class="navbar-brand px-3" href="#">
                <img src="letter-p.png" alt="Bootstrap" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active bg-dark text-light" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="penjualan.php">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="pelanggan.php">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="supplier.php">Supplier</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="position-absolute top-10 start-50 translate-middle-x my-5 py-5">
            <h4 class="text-center m-3">This website made for admin penjualan in PT. Pasti Laris</h4>
            <p>You can create, edit, and delete data on the page of table (Penjualan, Pelanggan, Produk, and Supplier)</p>

            <div class="row">
                <div class="col card shadow m-3 p-2" style="max-width: 540px;">
                    <a class="row align-items-center" style="text-decoration:none" href="penjualan.php">
                        <div class="col text-center">
                            <img src="https://cdn-icons-png.flaticon.com/128/4715/4715274.png" height="75">
                        </div>
                        <div class="col">
                            <h5 class="card-title text-dark">Penjualan</h5>
                        </div>
                    </a>
                </div>
                <div class="col card shadow m-3 p-2" style="max-width: 540px;">
                    <a class="row align-items-center" style="text-decoration:none" href="pelanggan.php">
                        <div class="col text-center">
                            <img src="https://cdn-icons-png.flaticon.com/128/4715/4715328.png" height="75">
                        </div>
                        <div class="col">
                            <h5 class="card-title text-dark">Pelanggan</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col card shadow m-3 p-2" style="max-width: 540px;">
                    <a class="row align-items-center" style="text-decoration:none" href="produk.php">
                        <div class="col text-center">
                            <img src="https://cdn-icons-png.flaticon.com/128/4715/4715310.png" height="75">
                        </div>
                        <div class="col">
                            <h5 class="card-title text-dark">Produk</h5>
                        </div>
                    </a>
                </div>
                <div class="col card shadow m-3 p-2" style="max-width: 540px;">
                    <a class="row align-items-center" style="text-decoration:none" href="supplier.php">
                        <div class="col text-center">
                            <img src="https://cdn-icons-png.flaticon.com/128/4715/4715290.png" height="75">
                        </div>
                        <div class="col">
                            <h5 class="card-title text-dark">Supplier</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
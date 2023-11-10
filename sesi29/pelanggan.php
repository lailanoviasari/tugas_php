<?php
include("connection.php");

$pelanggan = mysqli_query($connection, "SELECT * FROM pelanggan;");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>

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
                        <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="penjualan.php">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active bg-dark text-light" aria-current="page" href="pelanggan.php">Pelanggan</a>
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
        <div class="position-absolute top-10 start-50 translate-middle-x my-2 py-3 px-5 bg-dark">
            <h4 class="text-center m-3">Daftar Data Pelanggan</h4>
            <div class="text-center">
                <div class="text-center">
                    <a href="add_data/add_pelanggan.php" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <hr>
            <table id="table_pelanggan" class="table table-responsive table-dark table-hover" style="width: 1000px;">
                <thead>
                    <tr class="">
                        <th class="border text-center" width="15%">ID Pelanggan</th>
                        <th class="border text-center">Nama</th>
                        <th class="border text-center">Jenis Kelamin</th>
                        <th class="border text-center">Telpon</th>
                        <th class="border text-center">Alamat</th>
                        <th class="border text-center" width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelanggan as $key => $data) { ?>
                        <tr class="border">
                            <td class="border text-center"><?php echo $data['id'] ?></td>
                            <td class="border"><?php echo $data['nama'] ?></td>
                            <td class="border"><?php echo $data['jenis_kelamin'] ?></td>
                            <td class="border"><?php echo $data['telpon'] ?></td>
                            <td class="border"><?php echo $data['alamat'] ?></td>
                            <td class="border text-center">
                                <a href="edit_data/edit_pelanggan.php?id=<?php echo $data['id'] ?>" class="btn btn-warning btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                </a>
                                <a href="proses_delete/delete_data_pelanggan.php?id=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- begin :: CDN JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- end :: CDN JQuery -->

    <!-- begin :: CDN Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <!-- end :: CDN Datatable -->

    <!-- begin :: JS -->
    <script>
        let table = new DataTable('#table_pelanggan');
    </script>
    <!-- end :: JS -->

</body>

</html>
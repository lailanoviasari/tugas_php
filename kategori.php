<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator - Laila Novia Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- begin :: HTML container content -->
    <div class="container-s shadow position-absolute top-50 start-50 translate-middle p-5 bg-light">
        <!-- begin :: HTML judul content -->
        <h1 class="text-uppercase fs-3 fw-bold text-center">Calculator BMI</h1>
        <!-- end :: HTML judul content -->
        <!-- begin :: HTML form BMI -->
        <form class="mt-4" method="get" action="">
            <!-- begin :: HTML name input -->
            <div class="my-3">
                <label for="name">Name</label>
                <input type="text" class="form-control bg-secondary bg-opacity-10 py-3" id="name" name="name" required>
            </div>
            <!-- end :: HTML name input -->
            <!-- begin :: HTML height and weight input -->
            <div class="row">
                <div class="col">
                    <label for="heigth">Height (M)</label>
                    <input type="text" class="form-control bg-secondary bg-opacity-10 py-3" id="height" name="height" required>
                </div>
                <div class="col">
                    <label for="weight">Weight (Kg)</label>
                    <input type="text" class="form-control bg-secondary bg-opacity-10 py-3" id="weight" name="weight" required>
                </div>
            </div>
            <!-- begin :: HTML height and weight input -->
            <!-- begin :: HTML button calculate -->
            <div class="row justify-content-center my-3">
                <div class="col-4 text-center">
                    <button type="submit" name="calculate" class="btn btn-primary text-center">Calculate</button>
                </div>
            </div>
            <!-- end :: HTML button calculate -->
        </form>
        <!-- end :: HTML form BMI -->

        <!-- begin :: PHP -->
        <?php
        /* begin :: get calculate */
        if (isset($_GET['calculate'])) {
            /* begin :: deklarasi variabel name, height, and weight */
            $name = $_GET['name'];
            $height = floatval($_GET['height']); // rubah ke type float
            $weight = floatval($_GET['weight']); // rubah ke type float
            /* end :: deklarasi variabel name, height, and weight */

            /* begin :: calculate BMI */
            $result = number_format(($weight / ($height * $height)), 2, '.', ''); // ambil nilai 2 angka di belakang koma
            /* end :: calculate BMI */

            /* begin :: penentuan BMI */
            if ($result < 18.5) { // BMI kurus
                echo " 
                <!-- begin :: HTML keterangan BMI -->
                <div class='card-footer text-center'>
                    Halo, $name. Tinggi badan anda $height M, dan berat badan anda $weight Kg. Nilai BMI anda adalah $result, anda termasuk kurus.
                </div>
                <!-- end :: HTML keterangan BMI -->";
            } elseif ($result >= 18.5 && $result <= 24.9) { // BMI normal
                echo "
                <!-- begin :: HTML keterangan BMI -->
                <div class='card-footer text-center'>
                    Halo, $name. Tinggi badan anda $height M, dan berat badan anda $weight Kg. Nilai BMI anda adalah $result, anda termasuk normal.
                </div>
                <!-- end :: HTML keterangan BMI -->";
            } elseif ($result >= 25 && $result <= 29.9) { // BMI gemuk
                echo "
                <!-- begin :: HTML keterangan BMI -->
                <div class='card-footer text-center'>
                    Halo, $name. Tinggi badan anda $height M, dan berat badan anda $weight Kg. Nilai BMI anda adalah $result, anda termasuk gemuk.
                </div>
                <!-- end :: HTML keterangan BMI -->";
            } else { // BMI obesitas
                echo "
                <!-- begin :: HTML keterangan BMI -->
                <div class='card-footer text-center'>
                    Halo, $name. Tinggi badan anda $height M, dan berat badan anda $weight Kg. Nilai BMI anda adalah $result, anda termasuk obesitas.
                </div>
                <!-- end :: HTML keterangan BMI -->";
            }
            /* end :: penentuan BMI */
        }
        /* end :: get calculate */
        ?>
        <!-- end :: PHP -->
    </div>
    <!-- end :: HTML container content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
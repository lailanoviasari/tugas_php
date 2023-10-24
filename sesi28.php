<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai - Laila Novia Sari</title>

    <!-- begin :: css -->
    <style>
        * {
            font-family: system-ui, sans-serif;
        }

        h3 {
            background: #ffd91c;
            padding: 15px;
        }

        td {
            width: max-content;
            padding: 10px;
        }

        thead {
            font-weight: bold;
        }

        table {
            width: 900px;
            margin: 0px auto 0px auto;
            padding: 30px;
        }

        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <!-- end :: css -->
</head>

<body>
    <!-- begin :: title -->
    <h3>
        Daftar Nilai
    </h3>
    <!-- end :: title -->

    <!-- begin :: table -->
    <table>
        <!-- begin :: thead -->
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Hasil</td>
        </thead>
        <!-- end :: thead -->
        <!-- begin :: tbody -->
        <tbody>
            <!-- begin :: php -->
            <?php
            $students = file_get_contents("data.json");
            $array_students = json_decode($students);

            for ($i = 0; $i < count($array_students); $i++) { ?>

                <?php
                /* begin :: tr genap */
                if ($i % 2 == 0) { ?>
                    <tr style="background-color: #d9d9d9;">
                        <!-- begin :: td nomor -->
                        <td>
                            <?php
                            echo $i + 1, '.';
                            ?>
                        </td>
                        <!-- end :: td nomor -->

                        <!-- begin :: td nama -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->nama;
                                }
                            } ?>
                        </td>
                        <!-- end :: td nama -->

                        <!-- begin :: td ttl -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->tanggal_lahir;
                                }
                            } ?>
                        </td>
                        <!-- end :: td ttl -->

                        <!-- begin :: td umur -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    $year = date('Y');
                                    $thn_lahir = date('Y', strtotime($value->tanggal_lahir));
                                    $umur = $year - $thn_lahir;

                                    echo $umur, " tahun";
                                }
                            } ?>
                        </td>
                        <!-- end :: td umur -->

                        <!-- begin :: td alamat -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->alamat;
                                }
                            } ?>
                        </td>
                        <!-- end :: td alamat -->

                        <!-- begin :: td kelas -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->kelas;
                                }
                            } ?>
                        </td>
                        <!-- end :: td kelas -->

                        <!-- begin :: td nilai -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->nilai;
                                }
                            } ?>
                        </td>
                        <!-- end :: td nilai -->

                        <!-- begin :: td hasil -->
                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    if ($value->nilai >= 90 && $value->nilai <= 100) {
                                        echo "A";
                                    } elseif ($value->nilai >= 80 && $value->nilai < 90) {
                                        echo "B";
                                    } elseif ($value->nilai >= 70 && $value->nilai < 80) {
                                        echo "C";
                                    } elseif ($value->nilai >= 0 && $value->nilai < 70) {
                                        echo "D";
                                    }
                                }
                            } ?>
                        </td>
                        <!-- end :: td hasil -->
                    </tr>
                <?php
                }
                /* end :: tr genap */

                /* begin :: tr ganjil */ else { ?>
                    <tr>
                        <td>
                            <?php
                            echo $i + 1, '.';
                            ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->nama;
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->tanggal_lahir;
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    $year = date('Y');
                                    $thn_lahir = date('Y', strtotime($value->tanggal_lahir));
                                    $umur = $year - $thn_lahir;

                                    echo $umur, " tahun";
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->alamat;
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->kelas;
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    echo $value->nilai;
                                }
                            } ?>
                        </td>

                        <td>
                            <?php
                            foreach ($array_students as $key => $value) {
                                if ($key == $i) {
                                    if ($value->nilai >= 90 && $value->nilai <= 100) {
                                        echo "A";
                                    } elseif ($value->nilai >= 80 && $value->nilai < 90) {
                                        echo "B";
                                    } elseif ($value->nilai >= 70 && $value->nilai < 80) {
                                        echo "C";
                                    } elseif ($value->nilai >= 0 && $value->nilai < 70) {
                                        echo "D";
                                    }
                                }
                            } ?>
                        </td>
                    </tr>
                <?php
                }
                /* end :: tr ganjil */
                ?>
            <?php
            }
            ?>
            <!-- end :: php -->
        </tbody>
        <!-- end :: tbody -->
    </table>
    <!-- end :: table -->
</body>

</html>
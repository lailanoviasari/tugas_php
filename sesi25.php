<?php
// Tugas :
// 1. Membuat output bilangan ganjil dan genap
echo "Tugas no 1 : <br>";
$number = 10;

if ($number % 2 == 0) {
    echo "Bilangan $number, adalah bilangan genap <br> <br>";
} else {
    echo "Bilangan $number, adalah bilangan ganjil <br> <br>";
}

// 2. Membuat output tahun kabisat
echo "Tugas no 2 : <br>";
$year = 2024;

if ($year % 4 == 0) {
    echo "Tahun $year, adalah tahun kabisat <br> <br>";
} else {
    echo "Tahun $year, bukan tahun kabisat <br> <br>";
}

// 3. Membuat grade nilai
echo "Tugas no 3 : <br>";
$nilai = 98;

if ($nilai >= 90 && $nilai <= 100) {
    echo "Nilai $nilai, gradenya adalah A <br> <br>";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "Nilai $nilai, gradenya adalah B <br> <br>";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "Nilai $nilai, gradenya adalah C <br> <br>";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "Nilai $nilai, gradenya adalah D <br> <br>";
} elseif ($nilai < 60) {
    echo "Nilai $nilai, gradenya adalah E <br> <br>";
}

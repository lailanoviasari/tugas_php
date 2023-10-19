<?php 
// Sesi 26. Kamis, 19 Oktober 2023

// Buat output seperti berikut:
// Tugas 1 = angka 1 adalah ganjil, angka 2 adalah genap, sdt sampai 10
echo "Tugas 1 : <br>";
for ($i=1; $i <= 10; $i++) { 
    switch ($i) {
        case $i%2 == 0:
            echo "Angka $i, adalah bilangan genap <br>";
            break;
        
        default:
        echo "Angka $i, adalah bilangan ganjil <br>";
            break;
    }
}

// Tugas 2 : 2000 adalah tahun kabisat, 2001 bukan tahun kabisat, dst sampai 2023
echo "<br>Tugas 2 : <br>";
for ($i=2000; $i <= date('Y'); $i++) { 
    switch ($i) {
        case $i%400 == 0 || $i%4 == 0:
            echo "$i adalah tahun kabisat <br>";
            break;
        
        default:
        echo "$i bukan tahun kabisat <br>";
            break;
    }
}

// Tugas 3 : looping untuk nampilin angka 1-9, berkurang terus sampai angka 1
echo "<br>Tugas 3 : <br>";
for ($i=9; $i >= 1 ; $i--) { 
    for ($j=1; $j <= $i; $j++) { 
        echo "$j";
    }
    echo "<br>";
}

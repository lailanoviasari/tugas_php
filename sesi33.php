<?php

# NOMOR 1
echo 'Nomor 1 <br><br>';

# deklarasi array untuk nomor 1
$array_no1 = array('satu', 'dua', 'tiga', 'empat', 'lima');

# perulangan untuk memanggil data array dari index yang terakhir
for ($i=count($array_no1)-1; $i >=0 ; $i--) { 
    echo $array_no1[$i] . '<br>';
}

echo '<br><hr><br>';

# NOMOR 2
echo 'Nomor 2 <br><br>';

# deklarasi array untuk nomor 2
$array_no2 = array('apel', 'nanas', 'mangga', 'jeruk');

$jumlah_array = count($array_no2);

echo 'Terdapat ' . $jumlah_array . ' buah';

echo '<br><br><hr><br>';

# NOMOR 3
echo 'Nomor 3 <br><br>';

# deklarasi array untuk nomor 3
$array_no3 = array(7, 3, 4, 9);

$total = 0;

# perulangan untuk menghitung total dari penjumlahan seluruh data array
foreach ($array_no3 as $key => $value) {
    $total += $value;
}

echo 'Totalnya adalah ' . $total;

echo '<br><br><hr><br>';

# NOMOR 4
echo 'Nomor 4 <br><br>';

#perulangan untuk mencetak dan mengalikan angka 1 dengan angka 1-10
for ($i=1; $i <= 10; $i++) { 
    echo '1x'.$i.'='.(1*$i).'<br>';
}

?>
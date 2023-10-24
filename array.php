<?php

// deklarasi array 1 1
$buah ['semangka'] = 'isinya merah';
$buah ['jeruk'] = 'rasanya manis';
$buah ['apel'] = 'warnanya merah';
$buah ['anggur'] = 'harganya mahal';

// print array if name array is jeruk
echo $buah['jeruk'], "<br>";

// deklarasi array
$buah = array('semangka', 'jeruk', 'apel', 'anggur');

// fungsi count() for count array's length 
for ($i=0; $i < count($buah); $i++) { 
    echo "$buah[$i]<br>";
}
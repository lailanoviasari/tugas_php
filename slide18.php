<?php // pembuka php

// mmebuat looping untuk mencetak tanda bintang dari 9-1

// for looping
// looping pertama sebanyak 9 kali
for ($i=9; $i > 0; $i--) { 
    // looping kedua dimulai dengan nilai i pada looping pertama
    // digunakan untuk mencetak bintang berjumlah 9 - 1
    for ($j=$i; $j > 0; $j--) { 
        // mencetak bintang
        echo "*" ;
    }
    // mencetak baris selanjutnya (enter)
    echo "<br>";
}

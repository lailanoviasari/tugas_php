<?php
// array declaration
$nama = array('Pelita', 'Najmina', 'Fahmi', 'Anita', 'Nasa');
$umur = array(23, 20, 26, 21, 23);
$kelas = array('Laravel', 'Node JS', 'Digital Marketing', 'UI/UX Designer', 'Graphic Designer');
$biodata = array($nama, $umur, $kelas);

for ($i=0; $i < count($nama); $i++) { 
    echo "Nama : ", $nama[$i], ", Umur : ", $umur[$i], ", Kelas: ", $kelas[$i], "<br>";
}
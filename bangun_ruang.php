<?php

// calculate volume of 5 types of 3d figure

const PHI = 3.14159265358979323846;

// 1. cube (S**3)
$s = 3; // side or rusuk
$cube_volume = $s**3;

// 2. cuboid (l*w*h)
$l = 9; // length or panjang
$w = 5; // width or lebar
$h_cuboid = 3; // height of cuboid
$cuboid_volume = $l*$w*$h_cuboid;

// 3. cone ((phi*r**2*h)/3)
$r_cone = 5; // radius of cone
$h_cone = 7; // height of cone
$cone_volume = (PHI*($r_cone**2)*$h_cone)/3;

// 4. cylinder (phi*r**2*h)
$r_cylinder = 4; // radius of cylinder
$h_cylinder = 10; // height of cylinder
$cylinder_volume = PHI*($r_cylinder**2)*$h_cylinder;

// 5. sphere (4/3)*(phi*(r**3))
$r_sphere = 7; // radius
$sphere_volume = (4/3)*(PHI*($r_sphere**3));

// print results
echo "Berikut hasil perhitungan volume bangun ruang : <br>";
echo "1. Kubus dengan rusuk = $s, Volume = ", $cube_volume, "<br>";
echo "2. Balok dengan panjang = $l, lebar = $w, dan tinggi = $h_cuboid, Volume = ", $cuboid_volume, "<br>";
echo "3. Kerucut dengan jari-jari = $r_cone dan tinggi = $h_cone, Volume = ", $cone_volume, "<br>";
echo "4. Tabung dengan jari-jari = $r_cylinder dan tinggi = $h_cylinder, Volume = ", $cylinder_volume, "<br>";
echo "5. Bola dengan jari-jari = $r_sphere, Volume = ", $sphere_volume, "<br>";
?>
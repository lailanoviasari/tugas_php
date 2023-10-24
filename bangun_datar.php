<?php

// calculate area of 5 types of 2d figure

// 1. square (S**2)
$s = 3; // side or sisi
$square_area = $s**2;

// 2. rectangle (l*w)
$l = 9; // length or panjang
$w = 5; // width or lebar
$rectangle_area = $w*$l;

// 3. triangle ((b*h)/2)
$b = 5; // buttom or alas
$h_tri = 7; // height of triangle
$triangle_area = ($b*$h_tri)/2;

// 4. trapezoid (h(ab+cd)/2)
$h_trape = 5; // height of trapezoid
$ab = 5; // top side
$cd = 8; //buttom side
$trapezoid_area = $h_trape*($ab+$cd)/2;

// 5. circle (phi*(r**2))
$phi = 3.14;
$r = 7; // radius
$circle_area = $phi*($r**2);

// print results
echo "Berikut hasil perhitungan luas bangun datar : <br>";
echo "1. Persegi dengan sisi = $s, Luas = ", $square_area, "<br>";
echo "2. Persegi panjang dengan lebar = $w dan panjang = $l, Luas = ", $rectangle_area, "<br>";
echo "3. Segitiga dengan alas = $b dan tinggi = $h_tri, Luas = ", $triangle_area, "<br>";
echo "4. Trapesium dengan tinggi = $h_trape, sisi atas = $ab, sisi bawah = $cd, Luas = ", $trapezoid_area, "<br>";
echo "5. Lingkaran dengan jari-jari = $r, Luas = ", $circle_area, "<br>";
?>
<?php

//variable user
$nama_depan = "Iksan";
$nama_belakang = "Hanif";
$umur = 21;
$tb = 167;

echo $nama_depan ." ". $nama_belakang;
echo "<br>Nama Saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

//variable system
echo 'Document Root' . $_SERVER
["DOCUMENT_ROOT"]; 

//variable constant
define('PHI', 3,14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r} cm memiliki luas {$luas} cm2";




?>
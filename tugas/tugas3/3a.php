<?php 
$r = 10;
$phi = 3.14;

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r, $phi) {
    $luasLingkaran = $phi * $r * $r;
    return $luasLingkaran;
}

echo "jari-jari = " . $r . " cm.<br>";
echo "Luas Lingkaran = " . $luas = hitungLuasLingkaran($r, $phi) . " cm<sup>2</sup> <br> <hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($phi, $r) {
    $kelilingLingkaran = $phi * $r * 2;
    return $kelilingLingkaran;
}

echo "jari-jari = " . $r * 2 . " cm<br>";
echo "Keliling Lingkaran = " . $keliling = hitungKelilingLingkaran($phi, $r * 2) . " cm<br> <hr>";


?>
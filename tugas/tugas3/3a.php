<?php
function hitungLuasLingkaran($r)
{
    $luas = pi() * pow($r, 2);
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = " . number_format($luas, 1) . " cm²";
    echo "<hr>";
}

function hitungKelilingLingkaran($r)
{
    $keliling = 2 * pi() * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = " . number_format($keliling, 1) . " cm";
    echo "<hr>";
}

hitungLuasLingkaran(10);
hitungKelilingLingkaran(20);

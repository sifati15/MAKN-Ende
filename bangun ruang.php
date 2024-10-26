<?php

class RumusBangunRuang {
    // Menghitung luas persegi panjang
    public function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // Menghitung keliling persegi panjang
    public function hitungKelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    // Menghitung luas persegi
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    // Menghitung keliling persegi
    public function hitungKelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    // Menghitung luas segitiga
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Menghitung luas lingkaran
    public function hitungLuasLingkaran($jariJari) {
        return pi() * $jariJari * $jariJari;
    }

    // Menghitung keliling lingkaran
    public function hitungKelilingLingkaran($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

// Contoh penggunaan
$bangunRuang = new RumusBangunRuang();

$luasPersegiPanjang = $bangunRuang->hitungLuasPersegiPanjang(10, 5);
echo "Luas Persegi Panjang: $luasPersegiPanjang <br>";

$kelilingPersegiPanjang = $bangunRuang->hitungKelilingPersegiPanjang(10, 5);
echo "Keliling Persegi Panjang: $kelilingPersegiPanjang <br>";

$luasPersegi = $bangunRuang->hitungLuasPersegi(4);
echo "Luas Persegi: $luasPersegi <br>";

$kelilingPersegi = $bangunRuang->hitungKelilingPersegi(4);
echo "Keliling Persegi: $kelilingPersegi <br>";

$luasSegitiga = $bangunRuang->hitungLuasSegitiga(5, 8);
echo "Luas Segitiga: $luasSegitiga <br>";

$luasLingkaran = $bangunRuang->hitungLuasLingkaran(7);
echo "Luas Lingkaran: $luasLingkaran <br>";

$kelilingLingkaran = $bangunRuang->hitungKelilingLingkaran(7);
echo "Keliling Lingkaran: $kelilingLingkaran <br>";
?>

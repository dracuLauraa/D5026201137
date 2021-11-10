<?php
    // Nama function adalah "LuasSegitiga"
    // $a adalah parameter 1
    // $t adalah parameter 2
    // Tiap parameter dipisahkan dengan tanda "," (koma)
    function LuasSegitiga($a, $t){
        // Definisi variabel hasil
        $hasil = 0;
        // Perhitungan Luas Segitiga
        $hasil = 0.5*$a*$t;
        // Mengembalikan hasil nilai perhitungan
        return $hasil;
    }
    // MEMANGGIL FUNCTION
    $alas1 = 6;
    $tinggi1 = 10;
    // Pada Saat Pemanggilan function LuasSegitiga
    // $alas1 menjadi parameter 1
    // $tinggi1 menjadi parameter 2
    $luas1 = LuasSegitiga($alas1, $tinggi1);
    echo $luas1.'<br />'; // Hasil = 30
    $alas2 = 10;
    $tinggi2 = 8;
    $luas2 = LuasSegitiga($alas2, $tinggi2);
    echo $luas2.'<br />'; // Hasil = 40
?>
<?php

require_once 'App/init.php';

$produk1 = new komik("Hellokity", "Yuko shimizu", "Erlangga", 50000, 100);
$produk2 = new Game("Candy Crush", "Rizky Chandra", "King", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();


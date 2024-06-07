<?php 

require_once 'App/init.php';

$produk1 = new Motor("R15", "Yamaha", "Jepang", 10000000, 150);
$produk2 = new Mobil("BMW", "M3", "Jerman", 200000000, 1000);
$produk3 = new Mobil("Tesla", "Listrik", "Amerika", 1000000000, 1000);
$produk4 = new Motor("Ninja ZX", "Kawasaki", "Jepang", 100000000, 1000);
$produk5 = new Motor("Sprint", "Vespa", "Italy", 50000000, 500);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
$cetakProduk->tambahProduk( $produk3 );
$cetakProduk->tambahProduk( $produk4 );
$cetakProduk->tambahProduk( $produk5 );
echo "<strong>Latihan OOP PHP</strong>";

echo "<br>";
echo $cetakProduk->cetak();

echo "<hr>";
echo "Aplikasi By Dewa";


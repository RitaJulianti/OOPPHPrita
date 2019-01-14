<?php

class produk{
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return"$this->penulis,$this->penerbit";
	}
}


// $produk1 = new produk();
// $produk1->judul = "Doraemon";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Candy Crush";
// $produk2->tambahProperty = "hehehe";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "HelloKity";
$produk3->penulis = "Yuko Shimizu";
$produk3->penerbit = "Erlangga";
$produk3->harga = 50000;
var_dump($produk3);



$produk4 = new produk();
$produk4->judul ="Candy Crush";
$produk4->penulis = "Rizky Candra";
$produk4->penerbit = "King";
$produk4->harga = 25000;

echo "komik : " .  $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
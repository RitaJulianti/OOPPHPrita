<?php

class produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhalaman,
		   $waktumain,
		   $tipe;

	public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jmlhalaman =0, $waktumain = 0 , $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return"$this->penulis,$this->penerbit";
	}

	public function getinfolengkap() {
		//komik : HelloKity | Yuko Shimizu, Erlangga (50000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "komik") {
			$str .= "- {$this->jmlhalaman} Halaman.";
		} else if($this->tipe == "game") {
			$str .= "- {$this->waktumain} jam.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function Cetak ( $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
		return $str;
	}
}



$produk1 = new produk("HelloKity","Yuko Shimizu","Erlangga",50000, 100, 0 , "komik");
$produk2 = new produk("Candy Crush","Rizky Candra","King",25000,0, 50, "game");


echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();
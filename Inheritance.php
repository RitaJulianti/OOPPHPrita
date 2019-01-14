<?php

class produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhalaman,
		   $waktumain;
		   

	public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jmlhalaman =0, $waktumain = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
		
	}

	public function getLabel(){
		return"$this->penulis,$this->penerbit";
	}

	public function getinfoproduk() {
		//komik : HelloKity | Yuko Shimizu, Erlangga (50000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
		return $str;
	}
}


class komik extends produk{
	public function getinfoproduk(){
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
		return $str;

	}
}

class game extends produk{
	public function getinfoproduk() {
		$str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktumain} jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function Cetak ( $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
		return $str;
	}
}



$produk1 = new komik("HelloKity","Yuko Shimizu","Erlangga",50000, 100, 0 );
$produk2 = new game("Candy Crush","Rizky Candra","King",25000,0, 50);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
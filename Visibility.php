<?php

class produk{
	public $judul,
		   $penulis,
		   $penerbit;

	protected$diskon = 0;

	private $harga;
		   

	public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}
	
	public function getharga(){
		return $this->harga - ($this->harga * $this->diskon / 100 );
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
public $jmlhalaman;

public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jmlhalaman = 0 ){

	parent::__construct( $judul, $penulis, $penerbit, $harga);
	$this->jmlhalaman = $jmlhalaman;


}

	public function getinfoproduk(){
		$str = "komik : " . parent::getinfoproduk()." - {$this->jmlhalaman} Halaman.";
		return $str;

	}
}

class game extends produk{
	public $waktumain;

	public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $waktumain = 0){
		parent::__construct($judul , $penulis , $penerbit , $harga );

		$this->waktumain = $waktumain;
	}
public function setdiskon($diskon){
		$this->diskon = $diskon;
	}

	
	public function getinfoproduk() {
		$str = "game : ". parent::getinfoproduk()." - {$this->waktumain} jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function Cetak ( $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga})";
		return $str;
	}
}



$produk1 = new komik("HelloKity","Yuko Shimizu","Erlangga",50000, 100 );
$produk2 = new game("Candy Crush","Rizky Candra","King",25000,50);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";


$produk2->setdiskon(50);
echo $produk2->getharga();
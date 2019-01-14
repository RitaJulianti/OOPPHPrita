<?php

class produk{
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

		   

	public function __construct( $judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	}
	public function setjudul($judul){
		$this->judul = $judul;
	}

	public function getjudul(){
		return $this->judul;
	}
	public function setpenulis($penulis) {
		$this->penulis = $penulis;
	}
	public function getpenulis(){
		return $this->penulis;
	}
	public function setpenerbit ($penerbit){
		$this->penerbit = $penerbit;
	}
	public function getpenerbit(){
		return $this->penerbit;
	}
	public function setdiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getdiskon(){
		return $this->diskon;
	}

	public function setharga($harga){
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
echo"<hr>";


echo $produk1->getjudul();

<?php

// define('NAMA', 'Rita Julianti');
//echo NAMA;

//echo "<br>";

// const UMUR = 16;
//ecjo UMUR;

//class Coba {
// const NAMA ='Rita Julianti';
//}

// echo Coba::NAMA;

// echo __FILE__;

// function Coba() {
	//return __FUNCTON__;
//}
 
 // echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

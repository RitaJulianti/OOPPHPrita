<?php

//require_once 'produk/InfoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/komik.php';
// require_once 'produk/game.php';
// require_once 'produk/cetakinfoproduk.php';


spl_autoload_register(function($class){
	require_once __DIR__ . '/produk/' . $class .'.php';
});
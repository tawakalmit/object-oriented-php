<?php 

// Jualan produk
// komik dan game

class Produk {
	public $judul, 
	 	   $penulis,
	 	   $penerbit,
	 	   $harga;

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new Produk();
// $produk1->judul = "One Piece";
// $produk1->penulis = "Eichiro Oda";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = 30000;

// $produk2 = new Produk();
// $produk2->judul = "Naruto";
// $produk2->penulis = "Masashi Kishimoto";
// $produk2->penerbit = "Shonen Jump";
// $produk2->harga = 35000;

$produk3 = new Produk("Resident Evil", "Shinji Mikami", "Capcom", 800000);
echo "Game : " . $produk3->getLabel();
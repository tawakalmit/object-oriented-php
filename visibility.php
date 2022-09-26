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

	public function getInfoLengkap() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
		return $str;
	}
}

class Film extends Produk {
	public $durasi;

	public function __construct($judul, $penulis, $penerbit, $harga, $durasi) {
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->durasi=$durasi;
	}

	public function getInfoLengkap() {
		$str = "Komik : " . parent::getInfoLengkap() . " - {$this->durasi} Episode.";
		return $str;
	}
}

class Game extends Produk {
	public $waktumain;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktumain){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktumain=$waktumain;
	}

	public function getInfoLengkap() {
		$str = "Game : " . parent::getInfoLengkap() . " ~ {$this->waktumain} Jam.";
		return $str;
	}
}

$produk3 = new Game("Resident Evil", "Shinji Mikami", "Capcom", 800000, 50);
$produk4 = new Film("Game of Throne", "GG Martin", "HBO", 800000, 300);

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
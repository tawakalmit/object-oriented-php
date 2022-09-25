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

$produk3 = new Produk("Resident Evil", "Shinji Mikami", "Capcom", 800000);

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
		return $str;
	}
}

$infoproduk1 = new CetakInfoProduk();

echo $infoproduk1->cetak($produk3);
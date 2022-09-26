<?php 

// Jualan produk
// komik dan game

class Produk {
	public $judul, 
	 	   $penulis,
	 	   $penerbit,
	 	   $harga,
	 	   $durasi,
	 	   $waktumain,
	 	   $tipe;

	public function __construct($judul, $penulis, $penerbit, $harga, $durasi, $waktumain, $tipe) {
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		$this->durasi=$durasi;
		$this->waktumain=$waktumain;
		$this->tipe=$tipe;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "film") {
			$str .= " - {$this->durasi} episode.";
		} else if ($this->tipe == "game") {
			$str .= " ~ {$this->waktumain} jam.";
		}
		return $str;
	}

}

$produk3 = new Produk("Resident Evil", "Shinji Mikami", "Capcom", 800000, 0, 50, "game");
$produk4 = new Produk("Game of Throne", "GG Martin", "HBO", 800000, 300, 0, "film");

class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
		return $str;
	}
}

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();


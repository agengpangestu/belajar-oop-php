<?php 
// jualan produk
// komik
// game

// class
class Produk {
	// property
	public $judul, 
			$penulis,
			$penerbit,
			$harga,
			$jumlahHalaman,
			$waktuMain,
			$tipe;

	// constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe)	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	// method
	public function getLabel()	{

		return "$this->penulis, $this->penerbit";
	}

	// method
	public function getInfoLengkap()	{
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jumlahHalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}
		return $str;
	}

}

// class
class CetakInfoProduk {

	// method
	public function cetak(Produk $produk)	{
		$str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
		return $str;
	}
}


// object 1
$produk1 = new Produk("Chainsaw Man", "Tatsuki Fujimoto", "Shonen Jump", 25000, 100, 0, "Komik");

// object 2
$produk2 = new Produk("Warzone 2", "Infinity Ward Raven Software", "Activision", "Free", 0, 45, "Game");

echo "Daftar Barang-Barang";
echo "<hr>";
echo $produk1->getInfoLengkap();
echo "<hr>";
echo $produk2->getInfoLengkap();







 ?>

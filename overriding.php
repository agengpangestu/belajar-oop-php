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
			$harga;

	// constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	// method
	public function getLabel()	{

		return "$this->penulis, $this->penerbit";
	}

	// method
	public function getInfoProduk()	{
		$str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
		
		return $str;
	}

}

// inheritance
// class child
class Komik extends Produk {
	public $jumlahHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)	{
		// memanggil class construct parentnya
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jumlahHalaman = $jumlahHalaman;
	}

	// method
	public function getInfoProduk()	{
		// parent:: keyword untuk mengambil property/method dari class parentnya
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
		return $str;
	}
}

// inheritance
// class child
class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)	{
		// memanggil class construct parentnya
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuMain = $waktuMain;
	}
	// method
	public function getInfoProduk()	{
		// parent:: keyword untuk mengambil property/method dari class parentnya
		$str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
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
$produk1 = new Komik("Chainsaw Man", "Tatsuki Fujimoto", "Shonen Jump", 25000, 100);

// object 2
$produk2 = new Game("Call of Duty:Warzone", "Infinity Ward Raven Software", "Activision", 1140000, 45);

echo "Daftar Produk";
echo "<hr>";
echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();







 ?>

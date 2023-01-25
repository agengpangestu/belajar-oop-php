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
			$waktuMain;

	// constructor
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
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
	// method
	public function getInfoProduk()	{
		$str = "Komik : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";
		return $str;
	}
}
// inheritance
// class child
class Game extends Produk {
	// method
	public function getInfoProduk()	{
		$str = "Game : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
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
$produk1 = new Komik("Chainsaw Man", "Tatsuki Fujimoto", "Shonen Jump", 25000, 100, 0);

// object 2
$produk2 = new Game("Warzone 2", "Infinity Ward Raven Software", "Activision", "Free", 0, 45);

echo "Daftar Produk";
echo "<hr>";
echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();







 ?>

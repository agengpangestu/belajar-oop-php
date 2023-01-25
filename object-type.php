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
$produk1 = new Produk("Chainsaw Man", "Tatsuki Fujimoto", "Shonen Jump", 25000);

// object 2
$produk2 = new Produk("Warzone 2", "Infinity Ward Raven Software", "Activision", "Free");

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
echo "<hr>";
// variable
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);








 ?>

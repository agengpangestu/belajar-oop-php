<?php 
// jualan produk
// komik
// game

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

// $produk1 = new Produk();
// $produk1->judul = "naruto vs sasuke";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "maid dragon";
// $produk2->tambahProperty = "huahua";
// var_dump($produk2->judul);

// object 1
$produk1 = new Produk("Chainsaw Man", "Tatsuki Fujimoto", "Shonen Jump", 25000);

// mencetak method
// echo $produk3->getLabel();

// object 2
$produk2 = new Produk("Warzone 2", "Infinity Ward Raven Software", "Activision", "Free");
$produk3 = new Produk("Among Us");

echo "Komik : " . $produk1->getLabel();
echo "<hr>";
echo "Game : " . $produk2->getLabel();
echo "<hr>";
var_dump($produk3);
 ?>

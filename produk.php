<?php 
// jualan produk
// komik
// game

class Produk {
	// property
	public $judul = "judul", 
			$penulis = "ageng",
			$penerbit = "gramedia",
			$harga = 20000;

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
$produk3 = new Produk();
$produk3->judul = "Chainsaw Man";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 25000;
// mencetak method
// echo $produk3->getLabel();

// object 2
$produk4 = new Produk();
$produk4->judul = "Warzone 2";
$produk4->penulis = "	Infinity Ward Raven Software";
$produk4->penerbit = "Activision";
$produk4->harga = "Free";

echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();
 ?>

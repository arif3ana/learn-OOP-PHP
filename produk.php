<?php 

class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    // method 
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

// Object
$produk1 = new Produk();
$produk1 -> judul = "Naruto";
$produk1 -> penulis = "Mashasi kishimoto";
$produk1 -> penerbit = "perot studio";
$produk1 -> harga = 5000;

// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";


$produk2 = new Produk();
$produk2 -> judul = "jump force";
$produk2 -> penulis = "Arif triana";
$produk2 -> penerbit = "game canter";
$produk2 -> harga = 10000;


echo " komik :" . $produk1->getLabel();
echo"<br>";
echo "game :" . $produk2->getLabel();
?>

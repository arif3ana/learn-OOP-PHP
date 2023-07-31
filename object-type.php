<?php 

class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function __construct( $judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method 
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

class CetakInfoProduk {
    public function cetak ( produk $produk ) {
        $str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga} )";
        return $str;
    }
}



// Object
$produk1 = new Produk("Naruto", "Mashasi kishimotot", "perost studio", 5000);
// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";
$produk2 = new Produk("Naruto", "Mashasi kishimotot", "perost studio", 5000);



echo " komik :" . $produk1->getLabel();
echo"<br>";
echo "game :" . $produk2->getLabel();
echo"<br>";


$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);
?>

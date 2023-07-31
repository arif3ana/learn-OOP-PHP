<?php


class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
    }

    // method 
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        return $str;
    }


}


class komik extends Produk {
    public function getInfoProduk() {
        $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) - {$this->jmlhalaman} Halaman";

        return $str;
    }
}

class game extends Produk {
    public function getInfoProduk() {
        $str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) - {$this->waktumain} Jam";

        return $str;
    }
}




class CetakInfoProduk {
    public function cetak ( produk $produk ) {
        $str = " {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga} )";
        return $str;
    }
}



// Object
$produk1 = new komik("Naruto", "Mashasi kishimotot", "perost studio", 5000, 100, 0);
// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";
$produk2 = new game("Naruto", "Mashasi kishimotot", "perost studio", 5000, 0, 50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>

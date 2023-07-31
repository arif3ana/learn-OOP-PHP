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

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        return $str;
    }


}


class komik extends Produk {
    public $jmlhalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfoProduk() {
        $str = "komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman";

        return $str;
    }
}

class game extends Produk {
    public $waktumain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktumain )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktumain = $waktumain;
    }

    public function getInfoProduk() {
        $str = "game : " . parent::getInfoProduk() . " - {$this->waktumain} Jam";

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
$produk1 = new komik("Naruto", "Mashasi kishimotot", "perost studio", 5000, 100);
// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";
$produk2 = new game("Naruto", "Mashasi kishimotot", "perost studio", 5000, 50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>

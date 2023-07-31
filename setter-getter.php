<?php


class Produk {
    // property
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $diskon ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->diskon = $diskon;

    }

    // method 
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->Penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    
    public function getDiskon() {
        return $this->diskon;
    }




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
$produk2 = new game("Naruto", "Mashasi kishimotot", "perost studio", 250000, 50,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul(6786);
echo $produk1->getJudul();

?>



<!-- Visibility : (akses modifier) {
    public = bisa di akses di mana saja;
    protected = hanya bisa di akses di class parent && child;
    privet = hanya bisa di akses di class nya saja;
} -->

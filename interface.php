<?php
interface InfoProduk {
    public function getInfoProduk(); 
}


abstract class Produk {
    // property
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
    public function __construct( $judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

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


    abstract public function getInfo();



}




class komik extends Produk implements InfoProduk {
    public $jmlhalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman ) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        return $str;
    }

    public function getInfoProduk() {
        $str = "komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman";

        return $str;
    }
}

class game extends Produk implements InfoProduk {
    public $waktumain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktumain )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktumain = $waktumain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        return $str;
    }


    public function getInfoProduk() {
        $str = "game : " . $this->getInfo() . " - {$this->waktumain} Jam";

        return $str;
    }
}





class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    } 


    public function cetak () {
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}





// Object
$produk1 = new komik("Naruto", "Mashasi kishimotot", "perost studio", 5000, 100);
// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";
$produk2 = new game("Naruto", "Mashasi kishimotot", "perost studio", 250000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


?>



<!-- Visibility : (akses modifier) {
    public = bisa di akses di mana saja;
    protected = hanya bisa di akses di class parent && child;
    privet = hanya bisa di akses di class nya saja;
} -->

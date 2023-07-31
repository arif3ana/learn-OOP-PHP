<?php 

class Produk {
    // property
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain,
            $tipe;
    
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    // method 
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        if ( $this->tipe == "komik" ) {
            $str .= " - {$this->jmlhalaman} Halaman";
        } else if ( $this->tipe == "game" ) {
            $str .= " - {$this->waktumain} Jam";
        }

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
$produk1 = new Produk("Naruto", "Mashasi kishimotot", "perost studio", 5000, 100, 0, "komik");
// cara menampilkan objec
// echo "komik : $produk1->penulis, $produk1->penerbit.";
$produk2 = new Produk("Naruto", "Mashasi kishimotot", "perost studio", 5000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


?>

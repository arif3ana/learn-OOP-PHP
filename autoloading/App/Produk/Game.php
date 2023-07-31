<?php 
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

?>

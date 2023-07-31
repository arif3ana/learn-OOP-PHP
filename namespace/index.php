<?php 

require 'App/init.php';


// // Object
// $produk1 = new komik("Naruto", "Mashasi kishimotot", "perost studio", 5000, 100);
// // cara menampilkan objec
// // echo "komik : $produk1->penulis, $produk1->penerbit.";
// $produk2 = new game("Naruto", "Mashasi kishimotot", "perost studio", 250000, 50,);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use App\service\User as ServiceUser;
use App\produk\User;
new ServiceUser();

echo "<hr>";
new User();



?>

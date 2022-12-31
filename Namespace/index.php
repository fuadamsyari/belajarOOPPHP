<?php 
require_once "App/init.php";


// $produk1 = new Komik("Naruto", "Masashi Shimoto", "Shoen jump", 250000,100);
// $produk2 = new Game("Uncharted", "Neilduckman", "Sony Computer", 250000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->Cetak();


use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
new ProdukUser();
?>
<?php 
class Produk {
    public  $judul, $penulis, $penerbit, $harga, $halaman, $jamMain, $tipe;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $jamMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jamMain = $jamMain;
    }
    public function getLabel() {
        return  "$this->penulis, $this->penerbit";
    }
    public function getInfoPrdoduk(){
        // $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}


class komik extends Produk {
    public function getInfoPrdoduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman.";
        return $str;
    }
}

class game extends Produk {
    public function getInfoPrdoduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jamMain} Jam Main.";
        return $str;
    }
}


// class CetakInfoProduk {
//     public function Cetak(Produk $produk){
//         $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$produk->halaman} ";
//         return $str;

//     }
// }

// ----------------------------------------------------------------------------
$produk1 = new komik("Naruto", "Masashi Shimoto", "Shoen jump", 30000, 100, 0);
$produk2 = new game("Uncharted", "Neilduckman", "Sony Computer", 100000, 0, 50);

echo $produk1->getInfoPrdoduk();
echo "<br>";
echo $produk2->getInfoPrdoduk();


 

?>
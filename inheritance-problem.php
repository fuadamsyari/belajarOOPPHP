<?php 
class Produk {
    public  $judul, $penulis, $penerbit, $harga, $halaman, $jamMain, $tipe;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $jamMain = 0, $tipe = null ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jamMain = $jamMain;
        $this->tipe = $tipe;
    }
    public function getLabel() {
        return  "$this->penulis, $this->penerbit";
    }
    public function geInfolengkap(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->halaman} halaman.";
        } elseif ($this->tipe == "game") {
            $str .= " ~ {$this->jamMain} Jam Main.";
        }
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
$produk1 = new Produk("Naruto", "Masashi Shimoto", "Shoen jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neilduckman", "Sony Computer", 100000, 0, 50, "game");

echo $produk1->geInfolengkap();
echo "<br>";
echo $produk2->geInfolengkap();


 

?>
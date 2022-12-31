<?php 
class Produk {
    public  $judul, $penulis, $penerbit, $harga;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return  "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}
$produk1 = new Produk("Naruto", "Masashi Shimoto", "Shoen jump", 30000);
$produk2 = new Produk("Uncharted", "Neilduckman", "Sony Computer", 100000);
$produk3 = new Produk("dragon ball");


echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";
echo "Game : " . $produk3->getlabel();



?>
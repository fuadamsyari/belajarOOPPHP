<?php 
class Produk {
    private  $judul, $penulis, $penerbit, $harga, $diskon = 0;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit($penerbit){
        $this->$penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setDiskon($diskon){
        $this->$diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function setHarga($harga){
        return $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getLabel() {
        return  "$this->penulis, $this->penerbit";
    }
    public function getInfoPrdoduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
class komik extends Produk {
    public $halaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){
       parent::__construct($judul, $penulis, $penerbit, $harga);
       $this->halaman = $halaman;
    }
    public function getInfoPrdoduk(){
        $str = "Komik : " . parent::getInfoPrdoduk() . " - {$this->halaman} Halaman.";
        return $str;
    }
}
class game extends Produk {
    public $jamMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jamMain = $jamMain;
    }
    public function getInfoPrdoduk(){
        $str = "Game : " . parent::getInfoPrdoduk() . "  ~ {$this->jamMain} Jam Main.";
        return $str;
    }
}
// ----------------------------------------------------------------------------
$produk1 = new komik("Naruto", "Masashi Shimoto", "Shoen jump", 250000,100);
$produk2 = new game("Uncharted", "Neilduckman", "Sony Computer", 250000,50);

echo $produk1->getInfoPrdoduk();
echo "<br>";
echo $produk2->getInfoPrdoduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setPenulis("Fuad Amsyari");
echo $produk1->getPenulis();

 

?>
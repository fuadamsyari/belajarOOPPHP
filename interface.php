<?php 
interface infoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    protected  $judul, $penulis, $penerbit, $harga, $diskon = 0;
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
    abstract function getInfo();
}
// kelas komik
class komik extends Produk implements infoProduk {
    public $halaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){
       parent::__construct($judul, $penulis, $penerbit, $harga);
       $this->halaman = $halaman;
    }
    public function getInfoProduk(){
        $str = "Komik : " .  $this->getInfo() . "- {$this->halaman} Halaman.";
        return $str;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
// kelas game 
class game extends Produk implements infoProduk {
    public $jamMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jamMain = $jamMain;
    }
    public function getInfoProduk(){
        $str = "Game : " .  $this->getInfo() . " ~ {$this->jamMain} Jam Main.";
        return $str;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
// kelas cetak info produk
class CetakInfoProduk{
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// ----------------------------------------------------------------------------
$produk1 = new komik("Naruto", "Masashi Shimoto", "Shoen jump", 250000,100);
$produk2 = new game("Uncharted", "Neilduckman", "Sony Computer", 250000,50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->Cetak();

?>
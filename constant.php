<?php 
// define('NAMA', 'fuad amsyari');
// echo NAMA;
// echo "<br>";

// const Usia = '22';
// echo Usia;

// class Coba {
//     const NAMA = "Fuad amsyari";
    


// }
// echo Coba::NAMA;

// echo __LINE__; echo "<br>";

// function Coba(){
//     return __FUNCTION__;
// }
// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$kls = new Coba();
echo $kls->kelas;





?>
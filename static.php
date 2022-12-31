<?php 
// class ContohStatic{
//     public static $angka = 1;
//     public static function halo(){
//         return "Halo" . self::$angka++;
//     }
// }

// echo ContohStatic::$angka;
// echo "<hr>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();
// echo "<hr>";


class Contoh{
    public static $angka = 1;
    public function halo(){
        return "Halo " . self::$angka++ . " kali";
    }
}

$cth1 = new Contoh();
echo $cth1->halo();
echo "<hr>";
echo $cth1->halo();
echo "<hr>";
echo $cth1->halo();
echo "<hr>";

$cth2 = new Contoh();
echo $cth2->halo();
echo "<hr>";
echo $cth2->halo();
echo "<hr>";
echo $cth2->halo();
echo "<hr>";













?>
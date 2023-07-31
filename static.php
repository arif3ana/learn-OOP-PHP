<?php 

// class ContohStatic {
//     public static $angka = 1;

//     public static function hallo() {
//         return "Hallo" . self::$angka++ . "kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<hr>";
// echo ContohStatic::hallo();



// Nilai static akan selalu tetap maskipun objek di instansiasi berulangkali.

class Contoh {
    public static $angka = 1;

    public function hallo() {
        return "Hallo" . self::$angka++ . "kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();





// Biasanya digunakan untuk membuat fungsi bantuan/helper.
// atau digunakan di class-class utility pada framework. 
?>

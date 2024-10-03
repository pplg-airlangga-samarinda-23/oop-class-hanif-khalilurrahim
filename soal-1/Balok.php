<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $panjang ;
    private $lebar ;
    private $tinggi ;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;
        $this -> tinggi = $tinggi;
    }

    public function setpanjang($panjang) {
        $this->panjang = $panjang;
    }

    public function setlebar($lebar) {
        $this->lebar = $lebar;
    }

    public function settinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    public function getpanjang() {
        return $this->panjang;
    }

    public function getlebar() {
        return $this->lebar;
    }

    public function gettinggi() {
        return $this->tinggi;
    }

    // definisikan metode menghitung volume, luas permukaan, 
    public function hitungVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function hitungLuasPermukaan() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);
echo "block 1 .<br>";
echo "volume : " . $balok_1 -> hitungVolume() . "<br>";
echo "luaspermuakaan : " . $balok_1 -> hitungLuasPermukaan() . "<br>";
echo "block 2 .<br>";
echo "volume : " . $balok_2 -> hitungVolume() . "<br>";
echo "luaspermuakaan : " . $balok_2 -> hitungLuasPermukaan() . "<br>";
// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184 

// Balok 2
// Volume: 360
// Luas Permukaan: 372
?>
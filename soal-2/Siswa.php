<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    private $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggal_lahir;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggal_lahir) {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggal_lahir = $tanggal_lahir;
    }

    // Metode __set untuk mengatur nilai atribut private
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    // Metode __get untuk mengambil nilai atribut private
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // Metode untuk menghitung umur siswa berdasarkan tanggal lahir
    public function hitungUmur() {
        // Mengubah tanggal lahir ke objek DateTime
        $tanggal_lahir = new DateTime($this->tanggal_lahir);
        // Mengambil tanggal saat ini
        $tanggal_sekarang = new DateTime();
        // Menghitung selisih antara tanggal lahir dan tanggal saat ini
        $umur = $tanggal_sekarang->diff($tanggal_lahir);
        return $umur->y; // Mengembalikan umur dalam satuan tahun
    }

    // Metode untuk menampilkan informasi siswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NISN: " . $this->nisn . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Tanggal Lahir: " . $this->tanggal_lahir . "<br>";
        echo "Umur: " . $this->hitungUmur() . " tahun<br><br>";
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// Menampilkan informasi kedua siswa
echo "Informasi Siswa 1:<br>";
$siswa_1->tampilkanInfo();

echo "Informasi Siswa 2:<br>";
$siswa_2->tampilkanInfo();

// Menentukan siswa yang lebih tua
if ($siswa_1->hitungUmur() > $siswa_2->hitungUmur()) {
    echo "Siswa yang lebih tua adalah: " . $siswa1->nama . "<br>";
} else if ($siswa_1->hitungUmur() < $siswa_2->hitungUmur()) {
    echo "Siswa yang lebih tua adalah: " . $siswa_2->nama . "<br>";
} else {
    echo "Kedua siswa memiliki umur yang sama.<br>";
}
// contoh output:
// Bambang lebih tua dibandingkan Bahrun.
?>
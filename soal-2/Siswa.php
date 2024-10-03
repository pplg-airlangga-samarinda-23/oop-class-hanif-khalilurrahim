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
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggal_lahir)
    {
        $this -> nama = $nama;
        $this -> nisn = $nisn;
        $this -> alamat = $alamat;
        $this -> jurusan = $jurusan;
        $this -> tanggal_lahir = $tanggal_lahir;
    }

    public function setnama($nama) {
        $this->nama = $nama;
    }

    public function setnisn($nisn) {
        $this->nisn = $nisn;
    }

    public function setalamat($alamat) {
        $this->alamat = $alamat;
    }

    public function setjurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function getnama() {
        return $this->nama;
    }

    public function getnisn() {
        return $this->nisn;
    }

    public function getalamat() {
        return $this->alamat;
    }

    public function getjurusan() {
        return $this->jurusan;
    }

    // buat metode untuk menghitung umur siswa
    public function hitungUmur() {
        $tanggal_lahir = new datetime($this->tanggal_lahir);
        $tanggal_sekarang = new datetime();
        $umur = $tanggal_lahir -> diff($tanggal_sekarang);
        return $umur;
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// contoh output:
// Bambang lebih tua dibandingkan Bahrun.
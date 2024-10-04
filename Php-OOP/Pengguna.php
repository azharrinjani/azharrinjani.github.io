<?php
class Pengguna {
    // Properti private
    private $nama;
    private $email;

    // Constructor untuk menginisialisasi nilai properti
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    // Getter untuk properti nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk properti nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk properti email
    public function getEmail() {
        return $this->email;
    }

    // Setter untuk properti email
    public function setEmail($email) {
        $this->email = $email;
    }
}

// Contoh penggunaan class Pengguna
$pengguna = new Pengguna("Budi", "budi@example.com");

// Mengakses properti dengan getter
echo "Nama: " . $pengguna->getNama() . "\n";
echo "Email: " . $pengguna->getEmail() . "\n";

// Mengubah nilai properti dengan setter
$pengguna->setNama("Andi");
$pengguna->setEmail("andi@example.com");

echo "Nama baru: " . $pengguna->getNama() . "\n";
echo "Email baru: " . $pengguna->getEmail() . "\n";

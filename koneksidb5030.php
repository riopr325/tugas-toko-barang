<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "tokorio";

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function view_data() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM tbl5030_barang");
        $hasil = array();
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual) {
        mysqli_query($this->koneksi, "INSERT INTO tbl5030_barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama_barang', '$stok', '$harga_beli', '$harga_jual')");
    }
}
?>
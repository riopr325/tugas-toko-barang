<?php
include('koneksidb5030.php');
$koneksi = new database();

$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data(
        $_POST['nama_barang'],
        $_POST['stok'],
        $_POST['harga_beli'],
        $_POST['harga_jual']
    );
    header('location:view_data5030.php');
}
?>
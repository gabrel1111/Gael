<?php
$koneksi = new mysqli("localhost", "root", "", "inventaris");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>

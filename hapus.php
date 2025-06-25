<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM barang WHERE kode_barang='{$_GET['kode']}'");
header("Location: index.php");
?>

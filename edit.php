<?php include 'koneksi.php'; 
$data = $koneksi->query("SELECT * FROM barang WHERE kode_barang='{$_GET['kode']}'")->fetch_assoc();
?>

<form method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama_barang'] ?>"><br>
    Kategori: <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br>
    Jumlah: <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>"><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
    <input type="submit" name="ubah" value="Ubah">
</form>

<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE barang SET 
        nama_barang='{$_POST['nama']}',
        kategori='{$_POST['kategori']}',
        jumlah={$_POST['jumlah']},
        harga={$_POST['harga']}
        WHERE kode_barang='{$_GET['kode']}'
    ");
    echo "Data diubah. <a href='index.php'>Kembali</a>";
}
?>

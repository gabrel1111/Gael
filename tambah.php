<?php include 'koneksi.php'; ?>
<form method="post">
    Kode: <input type="text" name="kode"><br>
    Nama: <input type="text" name="nama"><br>
    Kategori: <input type="text" name="kategori"><br>
    Jumlah: <input type="number" name="jumlah"><br>
    Harga: <input type="number" name="harga"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    $koneksi->query("INSERT INTO barang VALUES (
        '{$_POST['kode']}',
        '{$_POST['nama']}',
        '{$_POST['kategori']}',
        {$_POST['jumlah']},
        {$_POST['harga']}
    )");
    echo "Data tersimpan. <a href='index.php'>Kembali</a>";
}
?>

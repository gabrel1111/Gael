<?php include 'koneksi.php'; ?>
<h2>Daftar Barang</h2>
<a href="tambah.php">Tambah Barang</a>
<table border="1">
<tr><th>Kode</th><th>Nama</th><th>Kategori</th><th>Jumlah</th><th>Harga</th><th>Aksi</th></tr>
<?php
$data = $koneksi->query("SELECT * FROM barang");
while ($row = $data->fetch_assoc()) {
    echo "<tr>
        <td>{$row['kode_barang']}</td>
        <td>{$row['nama_barang']}</td>
        <td>{$row['kategori']}</td>
        <td>{$row['jumlah']}</td>
        <td>{$row['harga']}</td>
        <td>
            <a href='edit.php?kode={$row['kode_barang']}'>Edit</a> | 
            <a href='hapus.php?kode={$row['kode_barang']}'>Hapus</a>
        </td>
    </tr>";
}
?>
</table>

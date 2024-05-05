<h1>Daftar Barang</h1>

<!-- Tampilkan daftar barang -->
<table>
    <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $item): ?>
    <tr>
        <td><?= $item->getId() ?></td>
        <td><?= $item->getNama() ?></td>
        <td><?= $item->getHarga() ?></td>
        <td><?= $item->getJumlah() ?></td>
        <td>
            <a href="update_barang.php?id=<?= $item->getId() ?>">Update</a>
            <a href="delete_barang.php?id=<?= $item->getId() ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Tambahkan tombol untuk membuat barang baru -->
<a href="create_barang.php">Tambah Barang Baru</a>
<h1>Daftar Pembelian</h1>

<!-- Tampilkan daftar pembelian -->
<table>
    <tr>
        <th>No.</th>
        <th>Tanggal</th>
        <th>Total Harga</th>
        <th>Barang</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pembelian as $item): ?>
    <tr>
        <td><?= $item->getId() ?></td>
        <td><?= $item->getTanggal() ?></td>
        <td><?= $item->getTotalHarga() ?></td>
        <td><?= $item->getBarang()->getNama() ?></td>
        <td>
            <a href="update_pembelian.php?id=<?= $item->getId() ?>">Update</a>
            <a href="delete_pembelian.php?id=<?= $item->getId() ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Tambahkan tombol untuk membuat pembelian baru -->
<a href="create_pembelian.php">Tambah Pembelian Baru</a>
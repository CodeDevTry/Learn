<h1>Daftar Penjualan</h1>

<!-- Tampilkan daftar penjualan -->
<table>
    <tr>
        <th>No.</th>
        <th>Tanggal</th>
        <th>Total Harga</th>
        <th>Barang</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($penjualan as $item): ?>
    <tr>
        <td><?= $item->getId() ?></td>
        <td><?= $item->getTanggal() ?></td>
        <td><?= $item->getTotalHarga() ?></td>
        <td><?= $item->getBarang()->getNama() ?></td>
        <td>
            <a href="update_penjualan.php?id=<?= $item->getId() ?>">Update</a>
            <a href="delete_penjualan.php?id=<?= $item->getId() ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Tambahkan tombol untuk membuat penjualan baru -->
<a href="create_penjualan.php">Tambah Penjualan Baru</a>
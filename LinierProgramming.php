class LinierProgramming {
    public function kombinasiPaketPenjualan($barang, $pembelian) {
        // Hitung kombinasi paket penjualan
        $kombinasi = [];
        foreach ($barang as $item) {
            $jumlah = 0;
            foreach ($pembelian as $pembelianItem) {
                if ($pembelianItem->getBarang()->getId() == $item->getId()) {
                    $jumlah += $pembelianItem->getJumlah();
                }
            }
            $kombinasi[] = ['barang' => $item, 'jumlah' => $jumlah];
        }
        return $kombinasi;
    }
}
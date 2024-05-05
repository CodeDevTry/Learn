class DashboardLaporanRugiLaba {
    public function laporanRugiLaba($barang) {
        // Hitung laporan rugi laba
        $totalHarga = 0;
        $totalBiaya = 0;
        foreach ($barang as $item) {
            $totalHarga += $item->getHarga() * $item->getJumlah();
            $totalBiaya += $item->getHarga() * $item->getJumlah() * 0.1; // Biaya 10%
        }
        $laba = $totalHarga - $totalBiaya;
        return $laba;
    }
}
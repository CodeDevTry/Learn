class PenjualanController {
    public function index() {
        // Tampilkan daftar penjualan
        $penjualan = Penjualan::all();
        require_once 'view_penjualan.php';
    }

    public function create() {
        // Tampilkan form untuk membuat penjualan baru
        require_once 'create_penjualan.php';
    }

    public function store($tanggal, $totalHarga, $barangId) {
        // Simpan data penjualan baru
        $penjualan = new Penjualan(null, $tanggal, $totalHarga, Barang::find($barangId));
        $penjualan->save();
        header('Location: index.php');
    }

    public function show($id) {
        // Tampilkan detail penjualan
        $penjualan = Penjualan::find($id);
        require_once 'show_penjualan.php';
    }

    public function update($id, $tanggal, $totalHarga, $barangId) {
        // Update data penjualan
        $penjualan = Penjualan::find($id);
        $penjualan->setTanggal($tanggal);
        $penjualan->setTotalHarga($totalHarga);
        $penjualan->setBarang(Barang::find($barangId));
        $penjualan->save();
        header('Location: index.php');
    }

    public function delete($id) {
        // Hapus data penjualan
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        header('Location: index.php');
    }
}

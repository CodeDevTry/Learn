class BarangController {
    public function index() {
        // Tampilkan daftar barang
        $barang = Barang::all();
        require_once 'view_barang.php';
    }

    public function create() {
        // Tampilkan form untuk membuat barang baru
        require_once 'create_barang.php';
    }

    public function store($nama, $harga, $jumlah) {
        // Simpan data barang baru
        $barang = new Barang(null, $nama, $harga, $jumlah);
        $barang->save();
        header('Location: index.php');
    }

    public function show($id) {
        // Tampilkan detail barang
        $barang = Barang::find($id);
        require_once 'show_barang.php';
    }

    public function update($id, $nama, $harga, $jumlah) {
        // Update data barang
        $barang = Barang::find($id);
        $barang->setNama($nama);
        $barang->setHarga($harga);
        $barang->setJumlah($jumlah);
        $barang->save();
        header('Location: index.php');
    }

    public function delete($id) {
        // Hapus data barang
        $barang = Barang::find($id);
        $barang->delete();
        header('Location: index.php');
    }
}

Controller untuk Class Pembelian

// PembelianController.php
class PembelianController {
    public function index() {
        // Tampilkan daftar pembelian
        $pembelian = Pembelian::all();
        require_once 'view_pembelian.php';
    }

    public function create() {
        // Tampilkan form untuk membuat pembelian baru
        require_once 'create_pembelian.php';
    }

    public function store($tanggal, $totalHarga, $barangId) {
        // Simpan data pembelian baru
        $pembelian = new Pembelian(null, $tanggal, $totalHarga, Barang::find($barangId));
        $pembelian->save();
        header('Location: index.php');
    }

    public function show($id) {
        // Tampilkan detail pembelian
        $pembelian = Pembelian::find($id);
        require_once 'show_pembelian.php';
    }

    public function update($id, $tanggal, $totalHarga, $barangId) {
        // Update data pembelian
        $pembelian = Pembelian::find($id);
        $pembelian->setTanggal($tanggal);
        $pembelian->setTotalHarga($totalHarga);
        $pembelian->setBarang(Barang::find($barangId));
        $pembelian->save();
        header('Location: index.php');
    }

    public function delete($id) {
        // Hapus data pembelian
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        header('Location: index.php');
    }
}

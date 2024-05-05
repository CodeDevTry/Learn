class Pembelian {
    private $id;
    private $tanggal;
    private $totalHarga;
    private $barang;

    public function __construct($id, $tanggal, $totalHarga, $barang) {
        $this->id = $id;
        $this->tanggal = $tanggal;
        $this->totalHarga = $totalHarga;
        $this->barang = $barang;
    }

    public function getId() {
        return $this->id;
    }

    public function getTanggal() {
        return $this->tanggal;
    }

    public function getTotalHarga() {
        return $this->totalHarga;
    }

    public function getBarang() {
        return $this->barang;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTanggal($tanggal) {
        $this->tanggal = $tanggal;
    }

    public function setTotalHarga($totalHarga) {
        $this->totalHarga = $totalHarga;
    }

    public function setBarang($barang) {
        $this->barang = $barang;
    }
}

class Barang {
    private $id;
    private $nama;
    private $harga;
    private $jumlah;

    public function __construct($id, $nama, $harga, $jumlah) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }
}

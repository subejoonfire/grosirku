<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Penjual extends BaseController
{
    protected $barangModel, $pesananModel, $kerajangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->pesananModel = new \App\Models\Pesanan();
        $this->kerajangModel = new \App\Models\Keranjang();
    }

    public function index()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'produk' => $barang,
            'dashboard' => 'Ada',
        ];
        echo view('penjual/index', $data);
    }

    public function produkKategori($kategori)
    {
        $barang = $this->barangModel->where('kategori', $kategori)->get()->getResultArray();

        $data = [
            'produk' => $barang,
        ];
        echo view('penjual/index', $data);
    }

    public function akun()
    {
        echo view('penjual/akun');
    }
    public function alamat()
    {
        echo view('penjual/alamat');
    }
    public function keranjang()
    {
        $row = $this->kerajangModel->join('barang', 'keranjang.idbarang = barang.idbarang', 'inner')->where(['keranjang.idpenjual' => session('idpenjual')])->get()->getResult();
        $data = [
            'modelKeranjang' => 'Ada',
            'data' => $row,
        ];
        echo view('penjual/keranjang', $data);
    }
    public function penjualan()
    {
        echo view('penjual/penjualan');
    }
    public function status_barang()
    {
        echo view('penjual/StatusBarang');
    }
    public function status_pesanan()
    {
        $data = [
            'pesanan' => 'Ada',
        ];
        echo view('penjual/StatusPesanan', $data);
    }
    public function ubah_sandi()
    {
        echo view('penjual/UbahSandi');
    }
    public function detailBarang($id)
    {
        $model = $this->barangModel->where(['idbarang' => $id])->get()->getRow();
        $barang = $this->barangModel->findAll();
        $data = [
            'produk' => $barang,
            'model' => $model,
            'dashboard' => 'Ada',
        ];
        echo view('penjual/index', $data);
    }
}

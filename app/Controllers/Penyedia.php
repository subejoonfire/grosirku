<?php

namespace App\Controllers;

class Penyedia extends BaseController
{
    public $barangModel, $pesananModel;
    public function __construct()
    {
        $this->barangModel = new \App\Models\BarangModel;
    }
    public function index()
    {
        session()->set('section', 'Barang Saya');
        return view('penyedia/index');
    }
    public function akun()
    {
        session()->set('section', 'Akun');
        return view('penyedia/akun');
    }
    public function alamat()
    {
        session()->set('section', 'Alamat');
        echo view('penyedia/alamat');
    }
    public function keuangan()
    {
        session()->set('section', 'Keuangan');
        echo view('penyedia/keuangan');
    }
    public function pesanan()
    {
        session()->set('section', 'Pesanan');
        echo view('penyedia/pesanan');
    }
    public function tambah_barang()
    {
        session()->set('section', 'Tambah Barang');
        echo view('penyedia/tambahBarang');
    }
    public function ubah_sandi()
    {
        session()->set('section', 'Ubah Sandi');
        return view('penyedia/UbahSandi');
    }
    public function edit_barang($id)
    {
        session()->set('section', 'Edit Barang');
        $row = $this->barangModel->where(['idbarang' => $id])->get()->getRow();
        $data = [
            'idbarang' => $row->idbarang,
            'nmbarang' => $row->nmbarang,
            'kategori' => $row->kategori,
            'stok' => $row->stok,
            'harga' => $row->harga,
            'gambar' => $row->gambar,
            'status' => $row->status,
        ];
        return view('penyedia/edit_barang', $data);
    }
    public function keluar()
    {
        session()->destroy();
        return redirect('/');
    }

}
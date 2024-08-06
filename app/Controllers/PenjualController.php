<?php

namespace App\Controllers;

class PenjualController extends BaseController
{
    public $penjualModel, $barangModel, $pesananModel, $keranjangModel;
    public function __construct()
    {
        $this->penjualModel = new \App\Models\Penjual();
        $this->barangModel = new \App\Models\BarangModel();
        $this->pesananModel = new \App\Models\Pesanan();
        $this->keranjangModel = new \App\Models\Keranjang();
    }
    public function pesanBarang($id)
    {
        $row = $this->keranjangModel->insert([
            'idbarang' => $id,
            'hargatotal' => $this->request->getPost('hargatotal'),
            'jmlpesanan' => $this->request->getPost('jmlpesanan'),
            'idpenjual' => session('idpenjual'),
        ]);
        if ($row) {
            return redirect('penjual');
        } else {
            return redirect('penjual');
        }
    }
    public function setPesanan()
    {
        $data = $this->request->getPost('idkeranjang');
        foreach ($data as $row1) {
            $dataPesan = $this->keranjangModel->join('barang', 'keranjang.idbarang = barang.idbarang', 'inner')->join('penyedia', 'barang.idpenyedia = penyedia.idpenyedia', 'inner')->where(['keranjang.idkeranjang' => $row1])->get()->getResult();
            foreach ($dataPesan as $row) {
                $this->pesananModel->insert([
                    'idpenyedia' => $row->idpenyedia,
                    'idbarang' => $row->idbarang,
                    'jmlpesanan' => $row->jmlpesanan,
                    'hargatotal' => $row->hargatotal,
                    'idkeranjang' => $row->idkeranjang,
                    'statuspesanan' => 'Sedang Diproses',
                    'idpenjual' => session('idpenjual'),
                ]);
                $this->keranjangModel->where('idkeranjang', $row1)->delete();
            }
        }
        return redirect()->back();
    }
    public function setAkun()
    {
        $data = [
            'plusername' => $this->request->getPost('plusername'),
            'email' => $this->request->getPost('email'),
            'nomor' => $this->request->getPost('nomor'),
            'kodepos' => $this->request->getPost('kodepos'),
            'alamat' => $this->request->getPost('alamat'),
            'desa' => $this->request->getPost('desa'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        ];
        $this->penjualModel->where('idpenjual', session('idpenjual'))->set($data)->update();
        return redirect()->back();
    }
    public function setPassword()
    {
        $row = $this->penjualModel->where([
            'idpenjual' => session('idpenjual'),
            'plpassword' => $this->request->getPost('passwordthen'),
        ])->set([
            'plpassword' => $this->request->getPost('passwordnew'),
        ])->update();
        if ($row) {
            return redirect()->back();
        } else {
            session()->setFlashdata('error', 'Terjadi Kesalahan');
            return redirect()->back();
        }
    }
}

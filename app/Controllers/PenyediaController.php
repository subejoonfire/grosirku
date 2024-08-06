<?php

namespace App\Controllers;

use App\Models\PenyediaModel;

class PenyediaController extends BaseController
{
    public $penyediaModel, $barangModel, $pesananModel;
    public function __construct()
    {
        if (empty(session('logged'))) {
            echo 'halo';
            die;
            return redirect('/');
        }
        $this->penyediaModel = new \App\Models\Penyedia;
        $this->barangModel = new \App\Models\BarangModel;
        $this->pesananModel = new \App\Models\Pesanan;
    }
    public function tambahBarang()
    {
        $nmbarang = $this->request->getPost('nmbarang');
        $stok = $this->request->getPost('stok');
        $harga = $this->request->getPost('harga');
        $gambar = $this->request->getFile('gambar');
        $kategori = $this->request->getPost('kategori');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $gambar->move(ROOTPATH . 'public/uploads');
            $fileName = $gambar->getName();
            $row = $this->barangModel->insert([
                'nmbarang' => $nmbarang,
                'stok' => $stok,
                'harga' => $harga,
                'gambar' => $fileName,
                'kategori' => $kategori,
                'status' => 'Tersedia',
                'idpenyedia' => session('idpenyedia'),
            ]);
            if ($row) {
                return redirect('penyedia');
            }
        } else {
            $error = $gambar->getError();
            echo "File upload error: $error";
        }
    }
    public function deleteBarang($id)
    {
        $row = $this->barangModel->where(['idbarang' => $id])->delete();
        if ($row) {
            return redirect()->back();
        } else {
            session()->setFlashdata('error', 'Terjadi Kesalahan');
            return redirect()->back();
        }
    }
    public function editBarang()
    {
        $idbarang = $this->request->getPost('idbarang');
        $nmbarang = $this->request->getPost('nmbarang');
        $kategori = $this->request->getPost('kategori');
        $stok = $this->request->getPost('stok');
        $harga = $this->request->getPost('harga');
        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getName();
        if ($fileName == '') {
            $this->barangModel->where(['idbarang' => $idbarang])->set([
                'nmbarang' => $nmbarang,
                'kategori' => $kategori,
                'stok' => $stok,
                'harga' => $harga,
            ])->update();
            return redirect('penyedia');
        } else {
            if ($gambar->isValid() && !$gambar->hasMoved()) {
                $gambar->move(ROOTPATH . 'public/uploads');
                $this->barangModel->where(['idbarang' => $idbarang])->set([
                    'nmbarang' => $nmbarang,
                    'kategori' => $kategori,
                    'gambar' => $fileName,
                    'stok' => $stok,
                    'harga' => $harga,
                ])->update();
                return redirect('penyedia');
            } else {
                session()->setFlashdata('error', 'Terjadi Kesalahan');
                return redirect('penyedia');
            }
        }
    }
    public function setStatus($id)
    {
        $row = $this->pesananModel->where(['idpesanan' => $id])->set([
            'statuspesanan' => $this->request->getPost('status')
        ])->update();
        if ($row) {
            return redirect()->back();
        } else {
            session()->setFlashdata('error', 'Terjadi Kesalahan');
            return redirect()->back();
        }
    }
    public function ubahPassword()
    {
        $row = $this->penyediaModel->where([
            'idpenyedia' => session('idpenyedia'),
            'pypassword' => $this->request->getPost('passwordthen')
        ])->set([
            'pypassword' => $this->request->getPost('passwordnew')
        ])->update();
        if ($row) {
            return redirect()->back();
        } else {
            session()->setFlashdata('error', 'Terjadi Kesalahan');
            return redirect()->back();
        }
    }
    public function setAkun()
    {
        $username = $this->request->getPost('username');
        $row = $this->penyediaModel->where(['idpenyedia' => session('idpenyedia')])->set(['pyusername' => $username])->update();
        if ($row) {
            session()->set('pyusername', $username);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}

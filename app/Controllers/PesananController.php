<?php

namespace App\Controllers;

use App\Models\PesananModel;

class PesananController extends BaseController
{
    public function index()
    {
        $pesananModel = new PesananModel();
        $data['pesanan'] = $pesananModel->getPesanan();

        return view('pesanan/index', $data);
    }
    public function delete($idpesanan)
    {
        $pesananModel = new PesananModel();
        $pesananModel->deletePesanan($idpesanan);

        return redirect()->to('/pesanan');
    }
    public function edit($idpesanan)
    {
        $pesananModel = new PesananModel();
        $data['pesanan'] = $pesananModel->getPesananById($idpesanan);

        return view('pesanan/edit', $data);
    }

    public function update()
    {
        $pesananModel = new PesananModel();

        $idpesanan = $this->request->getPost('idpesanan');
        $data = [
            'idpenyedia' => $this->request->getPost('idpenyedia'),
            'idbarang' => $this->request->getPost('idbarang'),
            'nmbarang' => $this->request->getPost('nmbarang'),
            'jmlpesanan' => $this->request->getPost('jmlpesanan'),
            'hargatotal' => $this->request->getPost('hargatotal'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $pesananModel->updatePesanan($idpesanan, $data);

        return redirect()->to('/pesanan');
    }

}

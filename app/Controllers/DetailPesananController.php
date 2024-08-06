<?php

namespace App\Controllers;

use App\Models\DetailPesananModel;

class DetailPesananController extends BaseController
{
    public function index()
    {
        $detailPesananModel = new DetailPesananModel();
        $data['detailpesanan'] = $detailPesananModel->getDetailPesanan();

        return view('detailpesanan/index', $data);
    }
    public function delete($iddetailpesanan)
    {
        $detailPesananModel = new DetailPesananModel();
        $detailPesananModel->deleteDetailPesanan($iddetailpesanan);

        return redirect()->to('/detailpesanan');
    }
    public function edit($iddetailpesanan)
    {
        $detailPesananModel = new DetailPesananModel();
        $data['detailpesanan'] = $detailPesananModel->getDetailPesananById($iddetailpesanan);
    
        return view('detailpesanan/edit', $data);
    }
    
    public function update()
    {
        $detailPesananModel = new DetailPesananModel();
    
        $iddetailpesanan = $this->request->getPost('iddetailpesanan');
        $data = [
            'idpenjual' => $this->request->getPost('idpenjual'),
            'idpesanan' => $this->request->getPost('idpesanan'),
            'tglpesanan' => $this->request->getPost('tglpesanan'),
            'statuspesanan' => $this->request->getPost('statuspesanan'),
            'alamat' => $this->request->getPost('alamat'),
        ];
    
        $detailPesananModel->updateDetailPesanan($iddetailpesanan, $data);
    
        return redirect()->to('/detailpesanan');
    }
    
}

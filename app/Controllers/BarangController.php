<?php

namespace App\Controllers;

use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $barangModel = new BarangModel();
        $data['barang'] = $barangModel->getBarang();

        return view('barang/index', $data);
    }
    public function edit($idbarang)
{
    $barangModel = new BarangModel();
    $data['barang'] = $barangModel->getBarangById($idbarang);

    return view('barang/edit', $data);
}

public function update()
{
    $barangModel = new BarangModel();

    $idbarang = $this->request->getPost('idbarang');
    $data = [
        'nmproduk' => $this->request->getPost('nmproduk'),
        'kategori' => $this->request->getPost('kategori'),
        'stok' => $this->request->getPost('stok'),
        'harga' => $this->request->getPost('harga'),
        'gambar' => $this->request->getPost('gambar'),
        'status' => $this->request->getPost('status'),
    ];

    $barangModel->updateBarang($idbarang, $data);

    return redirect()->to('/barang');
}
public function delete($idbarang)
{
    $barangModel = new BarangModel();
    $barangModel->deleteBarang($idbarang);

    return redirect()->to('/barang');
}


}

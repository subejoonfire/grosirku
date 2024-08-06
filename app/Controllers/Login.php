<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Controller\Admin;


class Login extends BaseController
{
    public function index()
    {
        $level = $this->request->getPost('level');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        if ($level == 'admin') {
            $AdminModel = new \App\Models\Admin();
            $data = $AdminModel->where([
                'username' => $username,
                'password' => $password,
            ])->get()->getRow();
            session()->set('logged', 'YES');
            if ($data != NULL) {
                return redirect('admin/dashboard');
            } else {
                return redirect()->back();
            }
        } else if ($level == 'penjual') {
            $penjualModel = new \App\Models\Penjual();
            $data = $penjualModel->where([
                'plusername' => $username,
                'plpassword' => $password,
            ])->get()->getRow();
            if ($data != NULL) {
                session()->setFlashdata('aksi', 'Halo');
                session()->set([
                    'idpenjual' => $data->idpenjual,
                    'plusername' => $data->plusername,
                    'plpassword' => $data->plpassword,
                    'alamat' => $data->alamat,
                    'desa' => $data->desa,
                    'kodepos' => $data->kodepos,
                    'jenis_kelamin' => $data->jenis_kelamin,
                    'nomor' => $data->nomor,
                    'email' => $data->email,
                    'logged' => 'YES',
                ]);
                return redirect('penjual');
            } else {
                return redirect()->back();
            }
        } else if ($level == 'penyedia') {
            $penyediaModel = new \App\Models\Penyedia();
            $data = $penyediaModel->where([
                'pyusername' => $username,
                'pypassword' => $password,
            ])->get()->getRow();
            if ($data != NULL) {
                session()->set([
                    'idpenyedia' => $data->idpenyedia,
                    'pyusername' => $data->pyusername,
                    'pypassword' => $data->pypassword,
                    'logged' => 'YES',
                ]);
                return redirect('penyedia');
            } else {
                return redirect()->back();
            }
        }
    }
}

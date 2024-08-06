<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    public $penjualModel, $penyediaModel, $adminModel;
    public $uri;
    public function __construct()
    {
        $this->uri = new \CodeIgniter\HTTP\URI('http://localhost:8080/editPage/');
        $this->penjualModel = new \App\Models\Penjual();
        $this->penyediaModel = new \App\Models\Penyedia();
        $this->adminModel = new \App\Models\Admin();
    }
    public function tambahPenjual()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $alamat = $this->request->getPost('alamat');
        $email = $this->request->getPost('email');
        $desa = $this->request->getPost('desa');
        $jeniskelamin = $this->request->getPost('jeniskelamin');
        $kodepos = $this->request->getPost('kodepos');
        $nomor = $this->request->getPost('nomor');
        $this->penjualModel->insert([
            'plusername' => $username,
            'plpassword' => $password,
            'alamat' => $alamat,
            'email' => $email,
            'desa' => $desa,
            'jeniskelamin' => $jeniskelamin,
            'kodepos' => $kodepos,
            'nomor' => $nomor,
        ]);
        return redirect('admin/dashboard');
    }
    public function tambahPenyedia()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $this->penyediaModel->insert([
            'pyusername' => $username,
            'pypassword' => $password
        ]);
        return redirect('admin/penyedia');
    }
    public function tambahAdmin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $this->adminModel->insert([
            'username' => $username,
            'password' => $password
        ]);
        return redirect('admin/admin');
    }
    public function hapusPenjual($idpenjual)
    {
        $this->penjualModel->where(['idpenjual' => $idpenjual])->delete();
        return redirect('admin/dashboard');
    }
    public function hapusPenyedia($idpenyedia)
    {
        $this->penyediaModel->where(['idpenyedia' => $idpenyedia])->delete();
        return redirect('admin/penyedia');
    }
    public function hapusAdmin($idadmin)
    {
        $this->adminModel->where(['idadmin' => $idadmin])->delete();
        return redirect('admin/admin');
    }

    public function editPage($id, $role)
    {
        if ($role == 'penyedia') {
            $row = $this->penyediaModel->where(['idpenyedia' => $id])->get()->getRow();
            $data = [
                'id' => $id,
                'username' => $row->pyusername,
                'password' => $row->pypassword,
                'role' => $role
            ];
            return view('admin/edit', $data);
        } else {
            $row = $this->adminModel->where(['idadmin' => $id])->get()->getRow();
            $data = [
                'id' => $id,
                'username' => $row->username,
                'password' => $row->password,
                'role' => $role
            ];
            return view('admin/edit', $data);
        }
    }
    public function editAction()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $role = $this->request->getPost('role');
        $id = $this->request->getPost('id');
        if ($role == 'penyedia') {
            $this->penyediaModel->where(['idpenyedia' => $id])->set([
                'pyusername' => $username,
                'pypassword' => $password,
            ])->update();
            return redirect('admin/penyedia');
        } else {
            $this->adminModel->where(['idadmin' => $id])->set([
                'username' => $username,
                'password' => $password,
            ])->update();
            return redirect('admin/admin');
        }
    }

    public function editPagePenjual($id)
    {
        $row = $this->penjualModel->where(['idpenjual' => $id])->get()->getRow();
        $data = [
            'idpenjual' => $row->idpenjual,
            'username' => $row->plusername,
            'password' => $row->plpassword,
            'alamat' => $row->alamat,
            'email' => $row->email,
            'desa' => $row->desa,
            'kodepos' => $row->kodepos,
            'nomor' => $row->nomor,
        ];
        return view('admin/editpenjual', $data);
    }
    public function editActionPenjual()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $alamat = $this->request->getPost('alamat');
        $email = $this->request->getPost('email');
        $desa = $this->request->getPost('desa');
        $kodepos = $this->request->getPost('kodepos');
        $nomor = $this->request->getPost('nomor');
        $idpenjual = $this->request->getPost('idpenjual');
        $this->penjualModel->where(['idpenjual' => $idpenjual])->set([
            'plusername' => $username,
            'plpassword' => $password,
            'alamat' => $alamat,
            'email' => $email,
            'desa' => $desa,
            'kodepos' => $kodepos,
            'nomor' => $nomor,
        ])->update();
        return redirect('admin/dashboard');
    }
}

<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $dataUser;

    public function __construct(){
        $this->dataUser = new UserModel;
    }

    public function index(): string
    {   
        return view('login');
    }

    public function validasi(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->dataUser->where('username', $username)->where('password', $password)->first();
        
        if($user){
            $session = session();
            $session->set('id_user',$user['id_user']);
            $session->set('username',$user['username']);
            $session->set('level',$user['level']);

            if($user['level'] === 'penyedia'){
                return redirect()->to('/penyedia');
            }else if($user['level'] === 'penjual'){
                return redirect()->to('/penjual');
            }
        } else{
            dd('Gagal login');
        }
    }
}

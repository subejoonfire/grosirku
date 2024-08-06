<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('admin/index');
    }
    public function admin()
    {
        echo view('admin/admin');
    }
    public function penyedia()
    {
        echo view('admin/penyedia');
    }
}

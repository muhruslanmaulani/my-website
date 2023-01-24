<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $user = new UserModel();
        $datauser = $user->findall();

        //dd($dataanggota);

        $data = [
            'judul' => 'Admin | View User',
            'datauser' => $datauser
        ];

        return view('user/viewuser', $data);

    }

    public function formtambah(){
        $data = [
            'judul' => 'Admin | Add User'
        ];

        helper('form');
        return view('user/viewformtambah', $data);

    }

    public function simpandata(){
        $data = [
            'username' => $this->request->getpost('username'),
            'password' => $this->request->getpost('password'),
        ];

        $user = new UserModel();

        $simpan = $user->simpan($data);

        if($simpan){
            return redirect()->to('user/index');
        }

    }
}

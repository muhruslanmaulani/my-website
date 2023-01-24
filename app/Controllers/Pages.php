<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home'
        ];
        return view('layout/header', $data)
            . view('pages/home')
            . view('layout/footer');
    }

    public function about()
    {
        $data = [
            'judul' => 'About'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
}

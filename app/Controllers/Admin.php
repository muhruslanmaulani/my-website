<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Admin'
        ];

        return view('admin/layout', $data);
    }
}

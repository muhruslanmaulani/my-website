<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Supplier extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Admin | Supplier'
        ];

        return view('supplier/viewsupplier', $data);
    }
}

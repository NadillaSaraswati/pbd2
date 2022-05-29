<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Buku;

class Buku extends Controller
{
    public function index()
    {
        $model = new M_Buku();
        $data = [
            'judul' => 'Daftar Koleksi Buku',
            'buku' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/index', $data);
        echo view('templates/v_footer');
    }
}

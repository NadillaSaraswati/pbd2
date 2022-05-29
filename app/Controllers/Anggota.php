<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Anggota;

class Anggota extends Controller
{
    public function index()
    {
        $model = new M_Anggota();
        $data = [
            'judul' => 'Daftar Anggota',
            'anggota' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Anggota/index', $data);
        echo view('templates/v_footer');
    }
}

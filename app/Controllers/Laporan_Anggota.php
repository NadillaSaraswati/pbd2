<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan_Anggota;

class Laporan_Anggota extends Controller
{
    public function index()
    {
        $model = new M_Laporan_Anggota();
        $data = [
            'judul' => 'Laporan Anggota',
            'laporan_anggota' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan_Anggota/index', $data);
        echo view('templates/v_footer');
    }
}

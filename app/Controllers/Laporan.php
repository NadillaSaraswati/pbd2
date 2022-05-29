<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan;

class Laporan extends Controller
{
    public function index()
    {
        $model = new M_Laporan();
        $data = [
            'judul' => 'Laporan',
            'laporan' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan/index', $data);
        echo view('templates/v_footer');
    }
}

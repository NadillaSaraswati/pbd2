<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan_Buku;

class Laporan_Buku extends Controller
{
    public function index()
    {
        $model = new M_Laporan_Buku();
        $data = [
            'judul' => 'Laporan Buku',
            'laporan_buku' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan_Buku/index', $data);
        echo view('templates/v_footer');
    }
}

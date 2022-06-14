<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Detail_Peminjaman;

class Detail_Peminjaman extends Controller
{
    public function index()
    {
        $model = new M_Detail_Peminjaman();
        $data = [
            'judul' => 'Detail Peminjaman',
            'detail_peminjaman' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Detail_Peminjaman/index', $data);
        echo view('templates/v_footer');
    }
}

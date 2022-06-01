<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Detail_Pengembalian;

class Detail_Pengembalian extends Controller
{
    public function index()
    {
        $model = new M_Detail_Pengembalian();
        $data = [
            'judul' => 'Detail Pengembalian',
            'detail_pengembalian' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Detail_Pengembalian/index', $data);
        echo view('templates/v_footer');
    }
}

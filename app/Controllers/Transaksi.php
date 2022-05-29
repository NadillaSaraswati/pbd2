<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Transaksi;

class Transaksi extends Controller
{
    public function index()
    {
        $model = new M_Transaksi();
        $data = [
            'judul' => 'Transaksi',
            'transaksi' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Transaksi/index', $data);
        echo view('templates/v_footer');
    }
}

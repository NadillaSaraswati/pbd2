<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan_Pengembalian;

class Laporan_Pengembalian extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Laporan_Pengembalian;
    }

    public function index()
    {
        $data = [
            'judul' => 'Laporan Pengembalian',
            'pengembalian' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan_Pengembalian/index', $data);
        echo view('templates/v_footer');
    }
}

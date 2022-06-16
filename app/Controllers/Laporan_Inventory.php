<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan_Inventory;

class Laporan_Inventory extends Controller
{
    public function index()
    {
        $model = new M_Laporan_Inventory();
        $data = [
            'judul' => 'Laporan Inventory',
            'laporan_inventory' => $model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan_Inventory/index', $data);
        echo view('templates/v_footer');
    }
}

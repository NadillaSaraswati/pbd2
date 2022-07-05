<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Laporan_Peminjaman;

class Laporan_Peminjaman extends Controller
{

    public function __construct ()
    {
        $this->model = new M_Laporan_Peminjaman;
    }

    public function index()
    {
        $data = [
            'judul' => 'Laporan Peminjaman',
            'peminjaman' => $this->model->getAllData(),
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data );
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Laporan_Peminjaman/index', $data);
        echo view('templates/v_footer');
    }
}

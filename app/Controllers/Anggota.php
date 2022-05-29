<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Anggota extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Daftar Anggota'
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Anggota/index');
        echo view('templates/v_footer');
    }
}

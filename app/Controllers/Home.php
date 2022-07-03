<?php

namespace App\Controllers;
use App\Models\M_Home;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new M_Home();
    }

    public function index()
    {
        $data = array (
            'judul' => "Homepage",
            'total_anggota' => $this->model->total_anggota(),
            'total_buku' => $this->model->total_buku(),
            'total_peminjaman' => $this->model->total_peminjaman(),
            'total_pengembalian' => $this->model->total_pengembalian(),
            'isi' => 'v_home'

        );

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('home/index');
        echo view('templates/v_footer');
    }
}

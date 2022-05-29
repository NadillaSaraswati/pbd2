<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Anggota;

class Anggota extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Anggota;
    }

    public function index()
    {
       
        $data = [
            'judul' => 'Data Anggota',
            'anggota' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Anggota/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'no_registrasi' => $this->request->getPost('no_registrasi'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'nama_anggota' => $this->request->getPost('nama_anggota'),
            'no_induk' => $this->request->getPost('no_induk')
        ];
           

        

        //insert data
        $success = $this->model->tambah($data);
        if ($success){
            return redirect()->to(base_url('anggota'));
        }


    }
}

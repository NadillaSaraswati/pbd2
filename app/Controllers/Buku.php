<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Buku;

class Buku extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Buku;
    }

    public function index()
    {
       
        $data = [
            'judul' => 'Data Buku',
            'buku' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'id_perolehan' => $this->request->getPost('id_perolehan'),
            'id_status' => $this->request->getPost('id_status'),
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'id_subyek' => $this->request->getPost('id_subyek'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'judul_buku' => $this->request->getPost('judul_buku')
        ];
           

        

        //insert data
        $success = $this->model->tambah($data);
        if ($success){
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('buku'));
        }


    }
}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Subyek;

class Subyek extends Controller
{
    public function __construct()
    {
        $this->model = new M_Subyek();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('subyek'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'subyek Buku',
            'subyek' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/subyek', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_subyek' => $this->request->getPost('id_subyek'),
            'subyek_buku' => $this->request->getPost('subyek_buku'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('subyek'));
        }
    }

    
    public function ubah()
    {
        $id_subyek = $this->request->getPost('id_subyek');
        
        $data = [
            'id_subyek' => $this->request->getPost('id_subyek'),
            'subyek_buku' => $this->request->getPost('subyek_buku'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_subyek);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('subyek'));
        }


    }

    public function hapus()
    {
        $id_subyek = $this->request->getPost('id_subyek');
        
        $success = $this->model->hapus($id_subyek);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('subyek'));
        }
    }
}

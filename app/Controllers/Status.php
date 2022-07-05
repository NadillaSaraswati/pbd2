<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Status;

class Status extends Controller
{
    public function __construct()
    {
        $this->model = new M_Status();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('status'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'Status Buku',
            'status' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/status', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_status' => $this->request->getPost('id_status'),
            'status' => $this->request->getPost('status'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('status'));
        }
    }

    
    public function ubah()
    {
        $id_status = $this->request->getPost('id_status');
        
        $data = [
            'id_status' => $this->request->getPost('id_status'),
            'status' => $this->request->getPost('status'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_status);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('status'));
        }


    }

    public function hapus()
    {
        $id_status = $this->request->getPost('id_status');
        
        $success = $this->model->hapus($id_status);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('status'));
        }
    }
}

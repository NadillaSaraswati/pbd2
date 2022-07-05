<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Penerbit;

class Penerbit extends Controller
{
    public function __construct()
    {
        $this->model = new M_Penerbit();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('penerbit'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'penerbit Buku',
            'penerbit' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/penerbit', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('penerbit'));
        }
    }

    
    public function ubah()
    {
        $id_penerbit = $this->request->getPost('id_penerbit');
        
        $data = [
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_penerbit);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('penerbit'));
        }


    }

    public function hapus()
    {
        $id_penerbit = $this->request->getPost('id_penerbit');
        
        $success = $this->model->hapus($id_penerbit);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('penerbit'));
        }
    }
}

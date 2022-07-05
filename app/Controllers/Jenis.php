<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Jenis;

class Jenis extends Controller
{
    public function __construct()
    {
        $this->model = new M_Jenis();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('jenis'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'jenis koleksi',
            'jenis' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/jenis', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_jenis' => $this->request->getPost('id_jenis'),
            'jenis_koleksi' => $this->request->getPost('jenis_koleksi'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('jenis'));
        }
    }

    
    public function ubah()
    {
        $id_jenis = $this->request->getPost('id_jenis');
        
        $data = [
            'id_jenis' => $this->request->getPost('id_jenis'),
            'jenis_koleksi' => $this->request->getPost('jenis_koleksi'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_jenis);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('jenis'));
        }


    }

    public function hapus()
    {
        $id_jenis = $this->request->getPost('id_jenis');
        
        $success = $this->model->hapus($id_jenis);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('jenis'));
        }
    }
}

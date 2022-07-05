<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Pengarang;

class Pengarang extends Controller
{
    public function __construct()
    {
        $this->model = new M_Pengarang();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('pengarang'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'Pengarang Buku',
            'pengarang' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/pengarang', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_pengarang' => $this->request->getPost('id_pengarang'),
            'nama_pengarang' => $this->request->getPost('nama_pengarang'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('pengarang'));
        }
    }

    
    public function ubah()
    {
        $id_pengarang = $this->request->getPost('id_pengarang');
        
        $data = [
            'id_pengarang' => $this->request->getPost('id_pengarang'),
            'nama_pengarang' => $this->request->getPost('nama_pengarang'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_pengarang);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('pengarang'));
        }


    }

    public function hapus()
    {
        $id_pengarang = $this->request->getPost('id_pengarang');
        
        $success = $this->model->hapus($id_pengarang);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('pengarang'));
        }
    }
}

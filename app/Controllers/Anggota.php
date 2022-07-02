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
        if (session()->get('kode_akses') <> 'a21cd') {
            return redirect()->to(base_url('home'));
        }
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
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('anggota'));
        }


    }

    public function ubah()
    {
        $id_anggota = $this->request->getPost('id_anggota');
        
        $data = [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'no_registrasi' => $this->request->getPost('no_registrasi'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'nama_anggota' => $this->request->getPost('nama_anggota'),
            'no_induk' => $this->request->getPost('no_induk')
        ];
           

        

        //update  data
        $success = $this->model->ubah($data, $id_anggota);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('anggota'));
        }


    }

    public function hapus()
    {
        $id_anggota = $this->request->getPost('id_anggota');
        
        $success = $this->model->hapus($id_anggota);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('anggota'));
        }
    }

}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Pengembalian;

class Pengembalian extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Pengembalian;
    }

    public function index()
    {
       
        $data = [
            'judul' => 'Transaksi Pengembalian',
            'pengembalian' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Pengembalian/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_pengembalian' => $this->request->getPost('id_pengembalian'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_user' => $this->request->getPost('id_user'),
            'id_peminjaman' => $this->request->getPost('id_peminjaman'),
            'keterangan' => $this->request->getPost('keterangan'),
            'tanggal_dikembalikan' => $this->request->getPost('tanggal_dikembalikan'),
        ];

     //insert data
     $success = $this->model->tambah($data);
     if ($success){
         session()->setFlashdata('message', ' ditambahkan');
         return redirect()->to(base_url('pengembalian'));
     }
                

    }

    public function ubah()
    {
        $id_pengembalian = $this->request->getPost('id_pengembalian');
        
        $data = [
            'id_pengembalian' => $this->request->getPost('id_pengembalian'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_user' => $this->request->getPost('id_user'),
            'id_peminjaman' => $this->request->getPost('id_peminjaman')
        ];
           

        

        //update  data
        $success = $this->model->ubah($data, $id_pengembalian);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('pengembalian'));
        }


    }

    public function hapus()
    {
        $id_pengembalian = $this->request->getPost('id_pengembalian');
        
        $success = $this->model->hapus($id_pengembalian);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('pengembalian'));
        }
    }

}

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
            'id_peminjaman' => $this->request->getPost('id_peminjaman'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_user' => $this->request->getPost('id_anggota'),
            'id_keterangan' => $this->request->getPost('id_keterangan'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'tanggal_pengembalian' => $this->request->getPost('tanggal_peminjaman'),
        ];
           

    }
}

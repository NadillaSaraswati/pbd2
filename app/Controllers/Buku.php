<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Buku;

class Buku extends Controller
{
    public function __construct()
    {
        $this->model = new M_Buku;
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('buku'));
        } else {
            return redirect()->to(base_url('home'));
        }
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
            'id_pengarang' => $this->request->getPost('id_pengarang'),
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'id_subyek' => $this->request->getPost('id_subyek'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'judul_buku' => $this->request->getPost('judul_buku')
        ];




        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('buku'));
        }
    }

    
    public function ubah()
    {
        $id_buku = $this->request->getPost('id_buku');
        
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'id_perolehan' => $this->request->getPost('id_perolehan'),
            'id_status' => $this->request->getPost('id_status'),
            'id_pengarang' => $this->request->getPost('id_pengarang'),
            'id_penerbit' => $this->request->getPost('id_penerbit'),
            'id_subyek' => $this->request->getPost('id_subyek'),
            'id_jenis' => $this->request->getPost('id_jenis'),
            'judul_buku' => $this->request->getPost('judul_buku')
        ];
           

        

        //update  data
        $success = $this->model->ubah($data, $id_buku);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('buku'));
        }


    }

    public function hapus()
    {
        $id_buku = $this->request->getPost('id_buku');
        
        $success = $this->model->hapus($id_buku);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('buku'));
        }
    }

}

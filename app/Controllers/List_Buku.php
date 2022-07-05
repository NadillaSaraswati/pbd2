<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_List_Buku;
use App\Models\M_Perolehan;
use App\Models\M_Jenis;
use App\Models\M_Pengarang;
use App\Models\M_Penerbit;
use App\Models\M_Buku;
use App\Models\M_Anggota;
use App\Models\M_Subyek;
use App\Models\M_Status;

class List_Buku extends Controller
{
    public function __construct()
    {
        $this->perolehan = new M_Perolehan();
        $this->jenis = new M_Jenis();
        $this->pengarang = new M_Pengarang();
        $this->penerbit = new M_Penerbit();
        $this->buku = new M_Buku();
        $this->anggota = new M_Anggota();
        $this->list_buku = new M_List_Buku();
        $this->model = new M_List_Buku();
        $this->subyek = new M_Subyek();
        $this->status = new M_Status();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('list_buku'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'Data Buku',
            'buku' => $this->model->getAllData(),
            'jenis' => $this->jenis->getAllData(),
            'pengarang' => $this->pengarang->getAllData(),
            'penerbit' => $this->penerbit->getAllData(),
            'anggota' => $this->anggota->getAllData(),
            'perolehan' => $this->perolehan->getAllData(),
            'subyek' => $this->subyek->getAllData(),
            'status' => $this->status->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/list_buku', $data);
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
            'judul_buku' => $this->request->getPost('judul_buku'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('list_buku'));
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
            'judul_buku' => $this->request->getPost('judul_buku'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_buku);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('list_buku'));
        }


    }

    public function hapus()
    {
        $id_buku = $this->request->getPost('id_buku');
        
        $success = $this->model->hapus($id_buku);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('list_buku'));
        }
    }

}

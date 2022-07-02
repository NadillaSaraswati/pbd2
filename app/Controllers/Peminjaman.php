<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Peminjaman;

class Peminjaman extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Peminjaman;
    }

    public function index()
    {
       
        $data = [
            'judul' => 'Transaksi Peminjaman',
            'peminjaman' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Peminjaman/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_peminjaman' => $this->request->getPost('id_peminjaman'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_buku' => $this->request->getPost('id_buku'),
            'id_user' => $this->request->getPost('id_user')
        ];

        $id_peminjaman = [
            'id_peminjaman' => $this->request->getPost('id_peminjaman')
        ];

      //insert data
      $success = $this->model->tambah($data);
      if ($success){
          session()->setFlashdata('message', ' ditambahkan');
          return redirect()->to(base_url('peminjaman'));
      }  

    }


    public function ubah()
    {
        $id_peminjaman = $this->request->getPost('id_peminjaman');
        
        $data = [
            'id_peminjaman' => $this->request->getPost('id_peminjaman'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_buku' => $this->request->getPost('id_buku'),
            'id_user' => $this->request->getPost('id_user'),
            
        ];
           

        

        //update  data
        $success = $this->model->ubah($data, $id_peminjaman);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('peminjaman'));
        }


    }

    public function hapus()
    {
        $id_peminjaman = $this->request->getPost('id_peminjaman');
        
        $success = $this->model->hapus($id_peminjaman);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('peminjaman'));
        }
    }


}

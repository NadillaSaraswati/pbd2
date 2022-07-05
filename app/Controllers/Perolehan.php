<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Perolehan;

class Perolehan extends Controller
{
    public function __construct()
    {
        $this->model = new M_Perolehan();
    }

    public function index()
    {
        if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') {
            redirect()->to(base_url('perolehan'));
        } else {
            return redirect()->to(base_url('home'));
        }
        $data = [
            'judul' => 'Perolehan Buku',
            'perolehan' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Buku/perolehan', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_perolehan' => $this->request->getPost('id_perolehan'),
            'perolehan' => $this->request->getPost('perolehan'),
        ];


        //insert data
        $success = $this->model->tambah($data);
        if ($success) {
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('perolehan'));
        }
    }

    
    public function ubah()
    {
        $id_perolehan = $this->request->getPost('id_perolehan');
        
        $data = [
            'id_perolehan' => $this->request->getPost('id_perolehan'),
            'perolehan' => $this->request->getPost('perolehan'),
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_perolehan);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('perolehan'));
        }


    }

    public function hapus()
    {
        $id_perolehan = $this->request->getPost('id_perolehan');
        
        $success = $this->model->hapus($id_perolehan);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('perolehan'));
        }
    }
}

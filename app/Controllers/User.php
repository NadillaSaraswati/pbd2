<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Auth;

class User extends Controller
{
    public function __construct ()
    {
        $this->model = new M_Auth;
    }


    public function index()
    {
        $data = [
            'judul' => 'User',
            'user' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('User/listuser', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        $data = [
            'id_user' => $this->request->getPost('id_user'),
            'kode_akses' => $this->request->getPost('kode_akses'),
            'pass_user' => $this->request->getPost('pass_user'),
            'nama_user' => $this->request->getPost('nama_user'),
            'telepon_user' => $this->request->getPost('telepon_user'),
            'alamat_user' => $this->request->getPost('alamat_user')
            
        ];
           

        

        //insert data
        $success = $this->model->tambah($data);
        if ($success){
            session()->setFlashdata('message', ' ditambahkan');
            return redirect()->to(base_url('user'));
        }


    }



}

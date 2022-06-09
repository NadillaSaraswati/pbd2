<?php

namespace App\Controllers;

use App\Models\M_Auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->M_Auth = new M_Auth();
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );

        echo view('User/login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],
            'pass_user' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ]
        ])) {
            //jika valid
            $nama_user = $this->request->getPost('nama_user');
            $pass_user = $this->request->getPost('pass_user');
            $cek = $this->M_Auth->login($nama_user, $pass_user);
            if ($cek) {
                //jika data cocok
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('id_user', $cek['id_user']);
                session()->set('kode_akses', $cek['kode_akses']);
                session()->set('telepon_user', $cek['telepon_user']);
                session()->set('alamat_user', $cek['alamat_user']);
                //login
                return redirect()->to(base_url('Home'));
            } else {
                //jika data tidak cocok
                session()->setFlashdata('pesan', 'Login Gagal!! Username dan password tidak cocok!');
                return redirect()->to(base_url('Auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/login')); 

        }
    }
}

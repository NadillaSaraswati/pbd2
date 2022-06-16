<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'User',
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('User/listuser', $data);
        echo view('templates/v_footer');
    }
}

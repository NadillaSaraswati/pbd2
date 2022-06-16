<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Auth;

class Profile extends Controller
{

    public function __construct ()
    {
        $this->model = new M_Auth();
    }

    public function index()
    {
        $data = [
            'judul' => 'Profile',
            'profile' => $this->model->getAllData()
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('User/profile', $data);
        echo view('templates/v_footer');
    }

}

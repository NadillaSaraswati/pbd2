<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }
    
    public function login()
    { 
        $data = array(
            'title' => 'Login',
        );

        echo view('User/login', $data);
    }

    
}
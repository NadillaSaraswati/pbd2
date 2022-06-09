<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Auth extends Model
{
    public function login($nama_user, $pass_user)
    {
        return $this->db->table('perpussmkn2.tabel_user')->where([
            'nama_user' => $nama_user,
            'pass_user' => $pass_user,
        ])->get()->getRowArray();
    }
}

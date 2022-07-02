<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Auth extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function login($nama_user, $pass_user)
    {
        return $this->db->table('perpussmkn2.tabel_user')->where([
            'nama_user' => $nama_user,
            'pass_user' => $pass_user,
        ])->get()->getRowArray();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_user')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_user')->insert($data);
    }
    public function hapus($id_user)
    {
        return $this->db->table('perpussmkn2.tabel_user')->delete(['id_user' => $id_user]);
    }

    public function ubah($data, $id_user)
    {
        return $this->db->table('perpussmkn2.tabel_user')->update($data, ['id_user' => $id_user]);
    }
}

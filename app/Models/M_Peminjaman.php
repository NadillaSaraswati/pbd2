<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Peminjaman extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->insert($data);
    }

  
}

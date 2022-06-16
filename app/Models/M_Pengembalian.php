<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengembalian extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_pengembalian')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_pengembalian')->insert($data);
    }

}

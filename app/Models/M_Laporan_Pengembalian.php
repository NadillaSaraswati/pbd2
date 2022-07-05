<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Laporan_Pengembalian extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_pengembalian')->get()->getResultArray();
    }
}

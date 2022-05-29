<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Laporan extends Model{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('smk2padang.tabel_peminjaman')->get()->getResultArray();
    }

}

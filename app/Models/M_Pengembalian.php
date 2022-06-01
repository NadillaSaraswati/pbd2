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
        return $this->db->table('perpussmkn2.tabel_peminjaman, perpussmkn2.tabel_detail_pengembalian,perpussmkn2.tabel_keterangan, perpussmkn2.tabel_user,perpussmkn2.tabel_pengembalian ')->get()->getResultArray();
    }

}

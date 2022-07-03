<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Home extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function total_anggota()
    {
        return $this->db->table('perpussmkn2.tabel_anggota')->countAll();
    }

    public function total_buku()
    {
        return $this->db->table('perpussmkn2.tabel_buku')->countAll();
    }

    public function total_peminjaman()
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->countAll();
    }

    public function total_pengembalian()
    {
        return $this->db->table('perpussmkn2.tabel_pengembalian')->countAll();
    }
}

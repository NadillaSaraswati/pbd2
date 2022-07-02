<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Buku extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_buku')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_buku')->insert($data);
    }
    
    public function hapus($id_buku)
    {
        return $this->db->table('perpussmkn2.tabel_buku')->delete(['id_buku' => $id_buku]);
    }

    public function ubah($data, $id_buku)
    {
        return $this->db->table('perpussmkn2.tabel_buku')->update($data, ['id_buku' => $id_buku]);
    }
}


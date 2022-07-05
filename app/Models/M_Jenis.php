<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Jenis extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_jenis')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_jenis')->insert($data);
    }

    public function hapus($id_jenis)
    {
        return $this->db->table('perpussmkn2.tabel_jenis')->delete(['id_jenis' => $id_jenis]);
    }

    public function ubah($data, $id_jenis)
    {
        return $this->db->table('perpussmkn2.tabel_jenis')->update($data, ['id_jenis' => $id_jenis]);
    }
}

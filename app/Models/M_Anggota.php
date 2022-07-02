<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Anggota extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_anggota')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_anggota')->insert($data);
    }

    public function hapus($id_anggota)
    {
        return $this->db->table('perpussmkn2.tabel_anggota')->delete(['id_anggota' => $id_anggota]);
    }

    public function ubah($data, $id_anggota)
    {
        return $this->db->table('perpussmkn2.tabel_anggota')->update($data, ['id_anggota' => $id_anggota]);
    }
}

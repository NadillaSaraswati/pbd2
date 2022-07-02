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

    public function hapus($id_peminjaman)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->delete(['id_peminjaman' => $id_peminjaman]);
    }

    public function ubah($data, $id_peminjaman)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->update($data, ['id_peminjaman' => $id_peminjaman]);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pengarang extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_pengarang')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_pengarang')->insert($data);
    }

    public function hapus($id_pengarang)
    {
        return $this->db->table('perpussmkn2.tabel_pengarang')->delete(['id_pengarang' => $id_pengarang]);
    }

    public function ubah($data, $id_pengarang)
    {
        return $this->db->table('perpussmkn2.tabel_pengarang')->update($data, ['id_pengarang' => $id_pengarang]);
    }
}

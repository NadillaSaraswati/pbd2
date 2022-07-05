<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Subyek extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_subyek')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_subyek')->insert($data);
    }

    public function hapus($id_subyek)
    {
        return $this->db->table('perpussmkn2.tabel_subyek')->delete(['id_subyek' => $id_subyek]);
    }

    public function ubah($data, $id_subyek)
    {
        return $this->db->table('perpussmkn2.tabel_subyek')->update($data, ['id_subyek' => $id_subyek]);
    }
}

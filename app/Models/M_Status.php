<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Status extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_status')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_status')->insert($data);
    }

    public function hapus($id_status)
    {
        return $this->db->table('perpussmkn2.tabel_status')->delete(['id_status' => $id_status]);
    }

    public function ubah($data, $id_status)
    {
        return $this->db->table('perpussmkn2.tabel_status')->update($data, ['id_status' => $id_status]);
    }
}

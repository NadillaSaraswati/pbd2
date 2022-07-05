<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Penerbit extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_penerbit')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_penerbit')->insert($data);
    }

    public function hapus($id_penerbit)
    {
        return $this->db->table('perpussmkn2.tabel_penerbit')->delete(['id_penerbit' => $id_penerbit]);
    }

    public function ubah($data, $id_penerbit)
    {
        return $this->db->table('perpussmkn2.tabel_penerbit')->update($data, ['id_penerbit' => $id_penerbit]);
    }
}

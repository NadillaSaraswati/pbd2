<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Perolehan extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_perolehan')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_perolehan')->insert($data);
    }

    public function hapus($id_perolehan)
    {
        return $this->db->table('perpussmkn2.tabel_perolehan')->delete(['id_perolehan' => $id_perolehan]);
    }

    public function ubah($data, $id_perolehan)
    {
        return $this->db->table('perpussmkn2.tabel_perolehan')->update($data, ['id_perolehan' => $id_perolehan]);
    }
}

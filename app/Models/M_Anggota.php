<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Anggota extends Model{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('smk2padang.tabel_anggota')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('smk2padang.tabel_anggota')->insert($data);
    }

}

<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Detail_Peminjaman extends Model
{
    
    protected $tabel = 'perpussmkn2.tabel_detail_peminjaman';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_peminjaman', 'id_buku', 'tanggal_pinjam', 'tanggal_pengembalian'];

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_detail_peminjaman')->get()->getResultArray();
    }

   public function add($data2)
   {
        return $this->db->table('perpussmkn2.tabel_detail_peminjaman')->insert($data2);
   }
}

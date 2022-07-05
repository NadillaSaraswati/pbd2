<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Laporan_Peminjaman extends Model
{
    protected $tabel = 'perpussmkn2.tabel_peminjaman';
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_peminjaman', 'id_anggota', 'id_user', 'id_buku'];
    
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')
        ->join('perpussmkn2.tabel_buku','perpussmkn2.tabel_buku.id_buku = perpussmkn2.tabel_peminjaman.id_buku')
        ->join('perpussmkn2.tabel_anggota','perpussmkn2.tabel_anggota.id_anggota = perpussmkn2.tabel_peminjaman.id_anggota')
        ->get()->getResultArray();
    }
}

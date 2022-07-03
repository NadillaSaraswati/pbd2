<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Peminjaman extends Model
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
        ->join('perpussmkn2.tabel_detail_peminjaman','perpussmkn2.tabel_detail_peminjaman.id_peminjaman = perpussmkn2.tabel_peminjaman.id_peminjaman')
        ->join('perpussmkn2.tabel_buku','perpussmkn2.tabel_buku.id_buku = perpussmkn2.tabel_peminjaman.id_buku')
        ->join('perpussmkn2.tabel_anggota','perpussmkn2.tabel_anggota.id_anggota = perpussmkn2.tabel_peminjaman.id_anggota')
        ->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->insert($data);
    }
    public function add($data2)
    {
        return $this->db->table('perpussmkn2.tabel_detail_peminjaman')->insert($data2);
    }

    public function hapus($id_peminjaman)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->delete(['id_peminjaman' => $id_peminjaman]);
    }

    public function ubah($data, $id_peminjaman)
    {
        return $this->db->table('perpussmkn2.tabel_peminjaman')->update($data, ['id_peminjaman' => $id_peminjaman]);
    }

    // public function getPeminjaman($id_peminjaman)
    // {
    //     return $this->db->table('perpussmkn2.tabel_peminjaman')->select($data, ['id_peminjaman' => $id_peminjaman]);
    // }

    
}

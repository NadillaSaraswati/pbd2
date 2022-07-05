<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Laporan_Buku extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('perpussmkn2.tabel_buku')
        ->join('perpussmkn2.tabel_jenis', 'perpussmkn2.tabel_jenis.id_jenis = perpussmkn2.tabel_buku.id_jenis')
        ->join('perpussmkn2.tabel_subyek', 'perpussmkn2.tabel_subyek.id_subyek = perpussmkn2.tabel_buku.id_subyek')
        ->join('perpussmkn2.tabel_penerbit', 'perpussmkn2.tabel_penerbit.id_penerbit = perpussmkn2.tabel_buku.id_penerbit')
        ->join('perpussmkn2.tabel_pengarang', 'perpussmkn2.tabel_pengarang.id_pengarang = perpussmkn2.tabel_buku.id_pengarang')
        ->join('perpussmkn2.tabel_status', 'perpussmkn2.tabel_status.id_status = perpussmkn2.tabel_buku.id_status')
        ->join('perpussmkn2.tabel_perolehan', 'perpussmkn2.tabel_perolehan.id_perolehan = perpussmkn2.tabel_buku.id_perolehan')
        ->get()->getResultArray();
    }
}

<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Peminjaman;
use App\Models\M_Detail_Peminjaman;

class Peminjaman extends Controller
{

    public function __construct ()
    {
        $this->model = new M_Peminjaman;
    }

    public function index()
    {
       
        $data = [
            'judul' => 'Transaksi Peminjaman',
            'peminjaman' => $this->model->getAllData(),
        ];

        // return view('welcome_message');
        echo view('templates/v_header', $data );
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('Peminjaman/index', $data);
        echo view('templates/v_footer');
    }

    public function tambah()
    {
        if (isset($_POST['tambah'])){
            $val = $this->validate([
                'id_peminjaman' => [
                    'label' => 'ID Peminjaman',
                   'rules' => 'required'
                ],
                'id_anggota' => [
                'label' => 'ID Anggota',
                'rules'=> 'required'
                ],
                
                'id_buku' => 'required',
                // 'tanggal_pinjam' => 'required',
                //  'tanggal_kembali' => 'required',
                'id_user' => 'required'
            ]);
            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());
                $data = [
                    'judul' => 'Transaksi Peminjaman',
                    'peminjaman' => $this->model->getAllData(),
                ];
        
                // return view('welcome_message');
                echo view('templates/v_header', $data );
                echo view('templates/v_sidebar');
                echo view('templates/v_topbar');
                echo view('Peminjaman/index', $data);
                echo view('templates/v_footer');
            } else{

                $data = [
                    'id_peminjaman' => $this->request->getPost('id_peminjaman'),
                    'id_anggota' => $this->request->getPost('id_anggota'),
                    'id_buku' => $this->request->getPost('id_buku'),
                    'id_user' => $this->request->getPost('id_user'),
                    'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
                    'tanggal_pengembalian' => $this->request->getPost('tanggal_pengembalian'),
                ];
                
              //insert data
              $success = $this->model->tambah($data);
              if ($success){
                  session()->setFlashdata('message', ' ditambahkan');
                  return redirect()->to(base_url('peminjaman'));
              }
        
            }
        } else {
            return redirect()->to('peminjaman');
        }
       
    }


    public function ubah()
    {
        $id_peminjaman = $this->request->getPost('id_peminjaman');
        
        $data = [
            'id_peminjaman' => $this->request->getPost('id_peminjaman'),
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_buku' => $this->request->getPost('id_buku'),
            'id_user' => $this->request->getPost('id_user'),
            'tanggal_pinjam' => $this->request->getPost('tanggal_pinjam'),
            'tanggal_pengembalian' => $this->request->getPost('tanggal_pengembalian'),
            
        ];
           

        //update  data
        $success = $this->model->ubah($data, $id_peminjaman);
        if ($success){
            session()->setFlashdata('message', ' diubah');
            return redirect()->to(base_url('peminjaman'));
        }
    }

    public function hapus()
    {
        $id_peminjaman = $this->request->getPost('id_peminjaman');
        
        $success = $this->model->hapus($id_peminjaman);
        if ($success){
            session()->setFlashdata('message', ' dihapus');
            return redirect()->to(base_url('peminjaman'));
        }
    }
 
    public function cetak(){
        $id_peminjaman = $this->url->segment();
        $data['peminjaman'] = $this->M_Peminjaman->getPeminjaman($id_peminjaman)->row_array();
    }


}

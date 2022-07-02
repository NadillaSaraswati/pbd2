<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <!-- Begin Page Content -->
               <div class="container-fluid"> 

                   <!-- Page Heading -->
                   <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                   <?php if(session()->get('message')) :?>
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                     Data Transaksi berhasil<strong><?=session()->getFlashdata('message');?></strong> 
                   </div>
                   
                   <script>
                     $(".alert").alert();
                   </script>
                    <?php endif; ?>
                  
                   <div class="card">
                   <div class="class-header">
                             <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                 <i class="fa fa-plus">Tambah Data Transaksi</i>
               </button>


                       </div>
    
                       <div class="card-body">
                           <table class="table table-striped">
                               <thread>
                                   <tr>
                                       <th>No</th>
                                       <th>Id Peminjaman</th>
                                       <th>Id Anggota</th>
                                       <th>Id Buku</th>
                                       <th>Id User</th>
                                       <th>Opsi</th>
                                   </tr>
                               </thread>
                               <tbody>
                                   <?php $i=1; ?>
                                    <?php  foreach($peminjaman as $row) :?>
                                   <tr>
                                       <td scope="row"><?= $i; ?></td>
                                       <td><?= $row['id_peminjaman']; ?></td>
                                       <td><?= $row['id_anggota']; ?></td>
                                       <td><?= $row['id_buku']; ?></td>
                                       <td><?= $row['id_user']; ?></td>
                                       <td>
                                       <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" 
                                        data-id_peminjaman="<?= $row['id_peminjaman']; ?>" data-id_anggota="<?= $row['id_anggota']; ?>" data-id_buku="<?= $row['id_buku']; ?>" data-id_user="<?= $row['id_user']; ?>" 
                                        > <i class="fa fa-edit"></i> </button>
                                        <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-danger" data-id_peminjaman="<?= $row['id_peminjaman']; ?>"> 
                                        <i class="fa fa-trash-alt"></i> </button>
                                       </td>
                              
                                   </tr>
                                   <?php $i++; ?>
                                   <?php  endforeach;?>
                               </tbody>
                           </table>
                       </div>
                   </div>



               </div>
               <!-- /.container-fluid -->

               </div>
               <!-- End of Main Content -->

                 
               <!-- Modal -->
               <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Tambah <?= $judul;?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('Peminjaman/tambah'); ?>" method="post"> 
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_peminjaman"></label>
                                 <input type="text" name="id_peminjaman" id="id_peminjaman" class="form-control" placeholder="Masukkan Id Peminjaman" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_anggota"></label>
                                 <input type="text" name="id_anggota" id="id_anggota" class="form-control" placeholder="Masukkan Id Anggota" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_buku"></label>
                                 <input type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id Buku" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_user"></label>
                                 <input type="text" name="id_user" id="id_user" class="form-control" placeholder="Masukkan Id Status" >
                               </div>
                           
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary">Tambah Data</button>
                           </div>
                           </form>
                       </div>
                   </div>
               </div>


               
             

                 <!-- Modal Ubah Data  -->
              <div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Ubah <?= $judul;?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   <a href="/peminjaman/ubah/<?= $row['id_peminjaman']; ?>"> </a>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('peminjaman/ubah'); ?>" method="post"> 
                               <input type="hidden" name="id_peminjaman" id="id_peminjaman">
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_peminjaman"></label>
                                 <input readonly type="text" name="id_peminjaman" id="id_peminjaman" class="form-control" placeholder="Masukkan Id Peminjaman" value="<?= $row ['id_peminjaman'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_anggota"></label>
                                 <input type="text" name="id_anggota" id="id_anggota" class="form-control" placeholder="Masukkan id Anggota" value="<?= $row ['id_anggota'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_buku"></label>
                                 <input type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id Buku" value="<?= $row ['id_buku'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_user"></label>
                                 <input type="text" name="id_user" id="id_user" class="form-control" placeholder="Masukkan id User" value="<?= $row ['id_user'] ?>" >
                               </div>
          
                               
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary">Ubah Data</button>
                           </div>
                           </form>
                       </div>
                   </div>
               </div>


<!-- Modal Hapus Data -->
<div class="modal fade" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/peminjaman/hapus" method="post">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
          <input type="hidden" id="id_peminjaman" name="id_peminjaman">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yakin</button>
        </div>
      </form>
    </div>
  </div>
</div>


               

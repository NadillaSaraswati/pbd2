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
                     Data Buku berhasil<strong><?=session()->getFlashdata('message');?></strong> 
                   </div>
                   
                   <script>
                     $(".alert").alert();
                   </script>
                    <?php endif; ?>
                  
                   <div class="card">
                   <div class="class-header">
                             <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                 <i class="fa fa-plus">Tambah Data</i>
               </button>


                       </div>
    
                       <div class="card-body">
                           <table class="table table-striped">
                               <thread>
                                   <tr>
                                       <th>No</th>
                                       <th>Id Buku</th>
                                       <th>Id Perolehan</th>
                                       <th>Id Status</th>
                                       <th>Id Penerbit</th>
                                       <th>Id Subyek</th>
                                       <th>Id Jenis</th>
                                       <th>Judul Buku</th>
                                       <th>aksi</th>
                                   </tr>
                               </thread>
                               <tbody>
                                   <?php $i=1; ?>
                                    <?php  foreach($buku as $row) :?>
                                   <tr>
                                       <td scope="row"><?= $i; ?></td>
                                       <td><?= $row['id_buku']; ?></td>
                                       <td><?= $row['id_perolehan']; ?></td>
                                       <td><?= $row['id_status']; ?></td>
                                       <td><?= $row['id_penerbit']; ?></td>
                                       <td><?= $row['id_subyek']; ?></td>
                                       <td><?= $row['id_jenis']; ?></td>
                                       <td><?= $row['judul_buku']; ?></td>
                                       <td>
                                        <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" 
                                        data-id_buku="<?= $row['id_buku']; ?>" data-id_perolehan="<?= $row['id_perolehan']; ?>" data-id_status="<?= $row['id_status']; ?>" data-id_penerbit="<?= $row['id_penerbit']; ?>" 
                                        data-id_subyek="<?= $row['id_subyek']; ?>" data-id_jenis="<?= $row['id_jenis']; ?>" data-judul_buku="<?= $row['judul_buku']; ?>"> <i class="fa fa-edit"></i> </button>
                                        <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-danger" data-id_buku="<?= $row['id_buku']; ?>"> 
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
                               <form action="<?= base_url('buku/tambah'); ?>" method="post"> 
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_buku"></label>
                                 <input type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id Buku" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_perolehan"></label>
                                 <input type="text" name="id_perolehan" id="id_perolehan" class="form-control" placeholder="Masukkan Id Perolehan" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_status"></label>
                                 <input type="text" name="id_status" id="id_status" class="form-control" placeholder="Masukkan Id Status" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_penerbit"></label>
                                 <input type="text" name="id_penerbit" id="id_penerbit" class="form-control" placeholder="Masukkan Id Penerbit" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_subyek"></label>
                                 <input type="text" name="id_subyek" id="id_subyek" class="form-control" placeholder="Masukkan Id Subyek" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_jenis"></label>
                                 <input type="text" name="id_jenis" id="id_jenis" class="form-control" placeholder="Masukkan Id Jenis" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="judul_buku"></label>
                                 <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" >
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

               <!-- Modal Ubah Data Siswa -->
               <div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Ubah <?= $judul;?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   <a href="/buku/ubah/<?= $row['id_buku']; ?>"> </a>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('buku/ubah'); ?>" method="post"> 
                               <input type="hidden" name="id_buku" id="id_buku">
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_buku"></label>
                                 <input readonly type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id buku" value="<?= $row ['id_buku'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_perolehan"></label>
                                 <input type="text" name="id_perolehan" id="id_perolehan" class="form-control" placeholder="Masukkan Id perolehan" value="<?= $row ['id_perolehan'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_status"></label>
                                 <input type="text" name="id_status" id="id_status" class="form-control" placeholder="Masukkan Id status" value="<?= $row ['id_status'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_penerbit"></label>
                                 <input type="text" name="id_penerbit" id="id_penerbit" class="form-control" placeholder="Masukkan Id penerbit" value="<?= $row ['id_penerbit'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_subyek"></label>
                                 <input type="text" name="id_subyek" id="id_subyek" class="form-control" placeholder="Masukkan Id subyek" value="<?= $row ['id_subyek'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_jenis"></label>
                                 <input type="text" name="id_jenis" id="id_jenis" class="form-control" placeholder="Masukkan Id jenis" value="<?= $row ['id_jenis'] ?>" >
                               </div>
                               <div class="form-group ab-0 ab-0">
                                 <label for="judul_buku"></label>
                                 <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukkan judul buku" value="<?= $row ['judul_buku'] ?>" >
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


<!-- Modal Hapus Data Siswa-->
<div class="modal fade" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/buku/hapus" method="post">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
          <input type="hidden" id="id_buku" name="id_buku">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yakin</button>
        </div>
      </form>
    </div>
  </div>
</div>

               


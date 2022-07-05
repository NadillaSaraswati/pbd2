<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <h1 class="h3 mb-4 text-gray-800">Perolehan Buku</h1>
                   <?php if(session()->get('message')) :?>
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                     Perolehan Buku berhasil<strong><?=session()->getFlashdata('message');?></strong> 
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
                                        <th>Id</th>
                                       <th>Perolehan</th>
                                        <th>Opsi</th>
                                   </tr>
                               </thread>
                               <tbody>
                                   <?php $i=1; ?>
                                    <?php  foreach($perolehan as $row) :?>
                                   <tr>
                                       <td scope="row"><?= $i; ?></td>
                                       <td><?= $row['id_perolehan']; ?></td>
                                       <td><?= $row['perolehan']; ?></td>
                                       <td>
                                        <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" 
                                        data-id_perolehan="<?= $row['id_perolehan']; ?>" data-perolehan="<?= $row['perolehan']; ?>" > <i class="fa fa-edit"></i> </button>
                                        <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-danger" data-id_perolehan="<?= $row['id_perolehan']; ?>"> 
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
                               <h5 class="modal-title">Tambah Perolehan Buku</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('perolehan/tambah'); ?>" method="post"> 
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_perolehan"></label>
                                 <input type="text" name="id_perolehan" id="id_perolehan" class="form-control" placeholder="Masukkan Id Perolehan" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="perolehan"></label>
                                 <input type="text" name="perolehan" id="perolehan" class="form-control" placeholder="Masukkan Perolehan" >
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
                               <h5 class="modal-title">Ubah Perolehan Buku</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   <a href="/perolehan/ubah<?= $row['id_perolehan']; ?>"> </a>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('perolehan/ubah'); ?>" method="post"> 
                               <input type="hidden" name="id_perolehan" id="perolehan">
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_perolehan"></label>
                                 <input readonly type="text" name="id_perolehan" id="id_perolehan" class="form-control" placeholder="Masukkan Id Perolehan" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="perolehan"></label>
                                 <input type="text" name="perolehan" id="perolehan" class="form-control" placeholder="Masukkan Perolehan" >
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
      <form action="/perolehan/hapus" method="post">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
          <input type="hidden" id="id_perolehan" name="id_perolehan">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yakin</button>
        </div>
      </form>
    </div>
  </div>
</div>

               


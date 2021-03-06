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
                     Data Anggota berhasil<strong><?=session()->getFlashdata('message');?></strong> 
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
                                       <th>Id Anggota</th>
                                       <th>No Registrasi</th>
                                       <th>Jurusan</th>
                                       <th>Nama</th>
                                       <th>No Induk</th>
                                       <th>Opsi</th>
                                   </tr>
                               </thread>
                               <tbody>
                                   <?php $i=1; ?>
                                    <?php  foreach($anggota as $row) :?>
                                   <tr>
                                       <td scope="row"><?= $i; ?></td>
                                       <td><?= $row['id_anggota']; ?></td>
                                       <td><?= $row['no_registrasi']; ?></td>
                                       <td><?= $row['jurusan']; ?></td>
                                       <td><?= $row['nama_anggota']; ?></td>
                                       <td><?= $row['no_induk']; ?></td>
                                      
                                       <td>
                                        <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" 
                                        data-id_anggota="<?= $row['id_anggota']; ?>" data-no_registrasi="<?= $row['no_registrasi']; ?>" data-id_jurusan="<?= $row['id_jurusan']; ?>" data-nama_anggota="<?= $row['nama_anggota']; ?>" 
                                        data-no_induk="<?= $row['no_induk']; ?>"> <i class="fa fa-edit"></i> </button>
                                        <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-danger" data-id_anggota="<?= $row['id_anggota']; ?>"> 
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

             
               
               <!-- Modal Tambah Data Siswa -->
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
                               <form action="<?= base_url('anggota/tambah'); ?>" method="post"> 
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_anggota"></label>
                                 <input type="text" name="id_anggota" id="id_anggota" class="form-control" placeholder="Masukkan Id Anggota" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="no_registrasi"></label>
                                 <input type="text" name="no_registrasi" id="no_registrasi" class="form-control" placeholder="Masukkan No Registrasi" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_jurusan"></label>
                                 <input type="text" name="id_jurusan" id="id_jurusan" class="form-control" placeholder="Masukkan Id Jurusan" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="nama_anggota"></label>
                                 <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="Masukkan Nama Anggota" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="no_induk"></label>
                                 <input type="text" name="no_induk" id="no_induk" class="form-control" placeholder="Masukkan No Induk Anggota" >
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
                                   <a href="/anggota/ubah/<?= $row['id_anggota'];?>"> </a>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('anggota/ubah'); ?>" method="post"> 
                               <input type="hidden" name="id_anggota" id="id_anggota">
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_anggota"></label>
                                 <input readonly type="text" name="id_anggota" id="id_anggota" class="form-control" placeholder="Masukkan Id Anggota" value="<?= $row ['id_anggota'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="no_registrasi"></label>
                                 <input type="text" name="no_registrasi" id="no_registrasi" class="form-control" placeholder="Masukkan No Registrasi" value="<?= $row ['no_registrasi'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="id_jurusan"></label>
                                 <input type="text" name="id_jurusan" id="id_jurusan" class="form-control" placeholder="Masukkan Id Jurusan" value="<?= $row ['id_jurusan'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="nama_anggota"></label>
                                 <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="Masukkan Nama Anggota" value="<?= $row ['nama_anggota'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                 <label for="no_induk"></label>
                                 <input type="text" name="no_induk" id="no_induk" class="form-control" placeholder="Masukkan No Induk Anggota" value="<?= $row ['no_induk'] ?>" >
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
      <form action="/anggota/hapus" method="post">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
          <input type="hidden" id="id_anggota" name="id_anggota">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yakin</button>
        </div>
      </form>
    </div>
  </div>
</div>

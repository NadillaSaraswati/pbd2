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
                                       <th>Perolehan</th>
                                       <th>Status</th>
                                       <th>Pengarang</th>
                                       <th>Penerbit</th>
                                       <th>Subyek</th>
                                       <th>Jenis</th>
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
                                       <td><?= $row['perolehan']; ?></td>
                                       <td><?= $row['status']; ?></td>
                                       <td><?= $row['nama_pengarang']; ?></td>
                                       <td><?= $row['nama_penerbit']; ?></td>
                                       <td><?= $row['subyek_buku']; ?></td>
                                       <td><?= $row['jenis_koleksi']; ?></td>
                                       <td><?= $row['judul_buku']; ?></td>
                                       <td>
                                        <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" 
                                        data-id_buku="<?= $row['id_buku']; ?>" data-perolehan="<?= $row['perolehan']; ?>" data-status="<?= $row['status']; ?>" data-nama_pengarang="<?= $row['nama_pengarang']; ?>" data-nama_penerbit="<?= $row['nama_penerbit']; ?>" 
                                        data-subyek_buku="<?= $row['subyek_buku']; ?>" data-jenis_koleksi="<?= $row['jenis_koleksi']; ?>" data-judul_buku="<?= $row['judul_buku']; ?>"> <i class="fa fa-edit"></i> </button>
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
                               <form action="<?= base_url('list_buku/tambah'); ?>" method="post"> 
                               <div class="form-group ab-0 ab-0">
                                <label>Id Buku</label>
                                 <label for="id_buku"></label>
                                 <input type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id Buku" >
                               </div>
                               
                               <div class="form-group ab-0">
                                <label>Perolehan</label>
                                 <label for="id_perolehan"></label>
                                <select name="id_perolehan" class="form-control" required>
                                    <option value="" hidden>Pilih Perolehan</option>
                                  <?php foreach($perolehan as $key => $value) : ?>
                                    <option value="<?= $value['id_perolehan']; ?>"><?= $value['perolehan']; ?></option>
                                  <?php endforeach; ?>
                                  </select>
                               </div>
                               <div class="form-group ab-0">
                               <label>Status Buku</label>
                                 <label for="id_status"></label>
                                 <select name="id_status" class="form-control" required>
                                    <option value="" hidden>Pilih Status Buku</option>
                                  <?php foreach($status as $key => $value) : ?>
                                    <option value="<?= $value['id_status']; ?>"><?= $value['status']; ?></option>
                                  <?php endforeach; ?>
                                  </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Pengarang</label>
                                 <label for="id_pengarang"></label>
                                  <select name="id_pengarang" class="form-control" required>
                                      <option value="" hidden>Pilih Pengarang</option>
                                    <?php foreach($pengarang as $key => $value) : ?>
                                      <option value="<?= $value['id_pengarang']; ?>"><?= $value['nama_pengarang']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Penerbit</label>
                                 <label for="id_penerbit"></label>
                                  <select name="id_penerbit" class="form-control" required>
                                      <option value="" hidden>Pilih Penerbit</option>
                                    <?php foreach($penerbit as $key => $value) : ?>
                                      <option value="<?= $value['id_penerbit']; ?>"><?= $value['nama_penerbit']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Subyek Buku</label>
                                 <label for="id_subyek"></label>
                                  <select name="id_subyek" class="form-control" required>
                                      <option value="" hidden>Pilih Subyek Buku</option>
                                    <?php foreach($subyek as $key => $value) : ?>
                                      <option value="<?= $value['id_subyek']; ?>"><?= $value['subyek_buku']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Jenis Koleksi</label>
                                 <label for="id_jenis"></label>
                                  <select name="id_jenis" class="form-control" required>
                                      <option value="" hidden>Pilih Jenis Koleksi</option>
                                    <?php foreach($jenis as $key => $value) : ?>
                                      <option value="<?= $value['id_jenis']; ?>"><?= $value['jenis_koleksi']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               <div class="form-group ab-0">
                                <label>Judul Buku</label>
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

               </div>
               <!-- /.container-fluid -->

               </div>
               <!-- End of Main Content -->

               <!-- Modal Ubah Data Siswa -->
               <div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Ubah <?= $judul; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   <a href="/list_buku/ubah<?= $row['id_buku']; ?>"> </a>
                           </div>
                           <div class="modal-body">
                               <form action="<?= base_url('List_buku/ubah'); ?>" method="POST";> 
                               <label for="id_buku"></label>
                               <input type="hidden" name="id_buku" id="id_buku">
                               <div class="form-group ab-0 ab-0">
                                 <label for="id_buku"></label>
                                 <input readonly type="text" name="id_buku" id="id_buku" class="form-control" placeholder="Masukkan Id buku" value="<?= $row ['id_buku'] ?>" >
                               </div>
                               <div class="form-group ab-0">
                                <label>Perolehan</label>
                                 <label for="id_perolehan"></label>
                                <select name="id_perolehan" class="form-control" required>
                                    <option value="" hidden>Pilih Perolehan</option>
                                  <?php foreach($perolehan as $key => $value) : ?>
                                    <option value="<?= $value['id_perolehan']; ?>"><?= $value['perolehan']; ?></option>
                                  <?php endforeach; ?>
                                  </select>
                               </div>
                               <div class="form-group ab-0">
                               <label>Status Buku</label>
                                 <label for="id_status"></label>
                                 <select name="id_status" class="form-control" required>
                                    <option value="" hidden>Pilih Status Buku</option>
                                  <?php foreach($status as $key => $value) : ?>
                                    <option value="<?= $value['id_status']; ?>"><?= $value['status']; ?></option>
                                  <?php endforeach; ?>
                                  </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Pengarang</label>
                                 <label for="id_pengarang"></label>
                                  <select name="id_pengarang" class="form-control" required>
                                      <option value="" hidden>Pilih Pengarang</option>
                                    <?php foreach($pengarang as $key => $value) : ?>
                                      <option value="<?= $value['id_pengarang']; ?>"><?= $value['nama_pengarang']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Penerbit</label>
                                 <label for="id_penerbit"></label>
                                  <select name="id_penerbit" class="form-control" required>
                                      <option value="" hidden>Pilih Penerbit</option>
                                    <?php foreach($penerbit as $key => $value) : ?>
                                      <option value="<?= $value['id_penerbit']; ?>"><?= $value['nama_penerbit']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Subyek Buku</label>
                                 <label for="id_subyek"></label>
                                  <select name="id_subyek" class="form-control" required>
                                      <option value="" hidden>Pilih Subyek Buku</option>
                                    <?php foreach($subyek as $key => $value) : ?>
                                      <option value="<?= $value['id_subyek']; ?>"><?= $value['subyek_buku']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               </div>
                               <div class="form-group ab-0">
                                <label>Jenis Koleksi</label>
                                 <label for="id_jenis"></label>
                                  <select name="id_jenis" class="form-control" required>
                                      <option value="" hidden>Pilih Jenis Koleksi</option>
                                    <?php foreach($jenis as $key => $value) : ?>
                                      <option value="<?= $value['id_jenis']; ?>"><?= $value['jenis_koleksi']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                               <div class="form-group ab-0">
                                <label>Judul Buku</label>
                                 <label for="judul_buku"></label>
                                 <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukkan Judul Buku" >
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
               
               </div>
               <!-- /.container-fluid -->

               </div>
               <!-- End of Main Content -->

<!-- Modal Hapus Data Siswa-->
<div class="modal fade" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="list_buku/hapus" method="post">
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

               


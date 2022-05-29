               <!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

                  
                   <div class="card">
                       <div class="card-body">
                           <table class="table table-striped">
                               <thread>
                                   <tr>
                                       <th>No</th>
                                       <th>Id Anggota</th>
                                       <th>No Registrasi</th>
                                       <th>Id Jurusan</th>
                                       <th>Nama</th>
                                       <th>No Induk</th>
                                   </tr>
                               </thread>
                               <tbody>
                                   <?php $i=1; ?>
                                    <?php  foreach($anggota as $row) :?>
                                   <tr>
                                       <td scope="row"><?= $i; ?></td>
                                       <td><?= $row['id_anggota']; ?></td>
                                       <td><?= $row['no_registrasi']; ?></td>
                                       <td><?= $row['id_jurusan']; ?></td>
                                       <td><?= $row['nama_anggota']; ?></td>
                                       <td><?= $row['no_induk']; ?></td>
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
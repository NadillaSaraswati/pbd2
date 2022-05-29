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
                                       <th>Id Buku</th>
                                       <th>Id Perolehan</th>
                                       <th>Id Status</th>
                                       <th>Id Penerbit</th>
                                       <th>Id Subyek</th>
                                       <th>Id Jenis</th>
                                       <th>Judul Buku</th>
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